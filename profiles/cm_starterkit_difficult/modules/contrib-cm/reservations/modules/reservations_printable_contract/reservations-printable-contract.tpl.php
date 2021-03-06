<?php
/**
 * @file
 * Printable contract template.
 */

global $base_path;
$logourl = theme_get_setting('logo_path', '');
?>
  <html>
    <head>
      <title>Contract</title>
      <link type="text/css" rel="stylesheet" href="<?php print $base_path ?><?php print drupal_get_path('module', 'reservations_printable_contract'); ?>/contract.css" />
    </head>
    <body>
      <div id="page">
        <div id="header">
        <?php if ($logourl) { ?>
           <img src="<?php print $base_path ?><?php print $logourl ?>">
        <?php } ?>
        <h2><?php print variable_get('site_name', ''); ?> Equipment Rental Contract</h2>
        <?php if (module_exists('token')) {
          print token_replace(variable_get('reservations_contract_header', ''), array('node' => $node));
        }
        else {
          print variable_get('reservations_contract_header','');
        }
        ?>
        Start: <?php print $start_date . '<br />'; ?>
        Returned by: <?php print $end_date . '<br />'; ?>
        Name: <?php print $username ?><br />
        Email: <?php print $email ?><br />
        <?php print $phone ? "Phone: $phone" . '<br />' : '' ?>

        </div>
        <table id="cost">
          <thead>
            <tr>
              <th>Item</th>
              <th>Commercisal Cost</th>
              <th>Member Cost</th>
            </tr>
          </thead>
          <tbody>
          <?php
  $discount = variable_get('reservations_membership_discount', 1);
  $comreservationsal_cost_total = 0;
  $member_cost_total = 0;

  $even_odd = 'even';

  foreach ($items as $item) {

    $item_node = node_load($item['reservations_placeholder_nid']);

    //$type            = reservations_load_content_type_settings($item->type);
    //$type            = reservations_load_item_settings($item, $item->type);
    $fee_hours       = $hours - ($item_node->reservations_fee_free_hours);
    $comreservationsal_cost = $item_node->reservations_rate_per_hour * $hours;
    $member_cost     = ($fee_hours > 0) ? ($item_node->reservations_rate_per_hour * $discount) * $fee_hours : 0;
    $day_rate     = ($item_node->reservations_rate_per_hour * 24);

    $comreservationsal_cost_total += $comreservationsal_cost;
    $member_cost_total += $member_cost;

    if ($item['item_title']) {
      $ttitle = htmlspecialchars($item['item_title']);
    }
    else {
      $ttitle = '<b>SPECIFIC ITEM NOT SELECTED FROM BUCKET</b>';
    }
    ?>
            <tr class="<?php print $even_odd; ?>">
              <td>
                <div><?php print $ttitle; ?>(<?php print money_format('%(#10n', $day_rate); ?> per day)</div>
                <?php
    if (count($item_node->taxonomy) > 0) {

      ?>
                  <ul class="accessories">
                  <?php
      foreach ($item_node->taxonomy as $accessory) {

        ?>
                    <li><?php print $accessory->name; ?></li>
                    <?php
      }
      // foreach

      ?>
                  </ul>
                  <?php
    }
    // if

    ?>
              </td>
              <td><?php echo money_format('%(#10n', $comreservationsal_cost); ?></td>
              <td><?php echo money_format('%(#10n', $member_cost); ?></td>
            </tr>
            <?php
    $even_odd = ($even_odd == 'even') ? 'odd' : 'even';
  }
  // foreach

  ?>
          </tbody>
          <tfoot>
            <tr class="<?php echo $even_odd; ?>">
              <th>Total</th>
              <td><?php echo money_format('%(#10n', $comreservationsal_cost_total) ?></td>
              <td><?php echo money_format('%(#10n', $member_cost_total) ?></td>
            </tr>
          <tfoot>
        </table>
        <div id="boilerplate"><?php module_exists('token') ? print(token_replace(variable_get('reservations_contract_boilerplate', ''), array('node' => $node))) : print(variable_get('reservations_contract_boilerplate','')) ?></div>
        <div id="footer"><?php module_exists('token') ? print(token_replace(variable_get('reservations_contract_footer', ''), array('node' => $node))) : print(variable_get('reservations_contract_footer','')) ?></div>
      </div>
    </body>
