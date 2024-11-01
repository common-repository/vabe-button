<?php
/**
 * Plugin Name: VABE / Button 
 * Description: Chat with your customers via WhatsApp, Facebook Messenger, Telegram, Viber and other apps.
 * Version: 1.0
 * Author: VABE
 * Author URI: https://vabe.io
 * Text Domain: vabe-button
 * Domain Path: /languages/
 */

function setup_vabe_button(){
    $icon = 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMTguMjMzIDE5LjEwMzhDMTcuODA2MyAxOC43OTI0IDE3LjQ3ODkgMTguNTU3NyAxNy4xNTYyIDE4LjMxNDNDMTYuMTIzNCAxNy41NDIyIDE1LjEwNTIgMTYuNzQ1NSAxNC4wNTE4IDE2LjAwMkMxMy43NjkxIDE1LjgwMjcgMTMuMzc5NyAxNS42NjMzIDEzLjAzODMgMTUuNjU5M0MxMC43OTMzIDE1LjYyOTMgOC41NDcgMTUuNjUyNiA2LjMwMTM2IDE1LjYzNDZDNS45MTQ2NCAxNS42MzIgNS41MjkyNSAxNS41MTYgNS4xNDI1MyAxNS40NTM5QzUuMTM4NTMgMTUuMzkzOSA1LjEzMzg2IDE1LjMzNDYgNS4xMjk4NiAxNS4yNzM5QzUuNjkwNjEgMTQuODQ3OSA2LjI0NDAyIDE0LjQxMDUgNi44MTg3NiAxNC4wMDQ0QzYuOTQwMTEgMTMuOTE5MSA3LjEzODE0IDEzLjkyMTEgNy4zMDIxNiAxMy45MjA0QzkuNDcyNDYgMTMuOTE0NCAxMS42NDM0IDEzLjkwNzcgMTMuODEzNyAxMy45Mjk3QzE0LjA2OTEgMTMuOTMyNCAxNC4zNTQ1IDE0LjA1NTEgMTQuNTcwNSAxNC4yMDMxQzE1LjE5NTkgMTQuNjMzOCAxNS43OTQ3IDE1LjEwNDYgMTYuNTA0MSAxNS42MzRDMTYuNTA0MSAxNS4wMDQ1IDE2LjUwNDEgMTQuNDk0NSAxNi41MDQxIDEzLjkyMDRDMTcuMDk5NSAxMy45MjA0IDE3LjYzMDkgMTMuOTIwNCAxOC4xOTM3IDEzLjkyMDRDMTguMTkzNyAxMS4yODM0IDE4LjE5MzcgOC43MTM2OCAxOC4xOTM3IDYuMDg1OTlDMTcuNDE0MiA2LjA4NTk5IDE2LjY2OTUgNi4wNjczMiAxNS45Mjg3IDYuMTA3OTlDMTUuODI0NyA2LjExMzk5IDE1LjY1OCA2LjQxMTM3IDE1LjY1NCA2LjU3NjA2QzE1LjYzMDYgNy43OTE1NiAxNS42NDY2IDkuMDA4MzkgMTUuNjQgMTAuMjI1MkMxNS42MzA2IDExLjUwNjEgMTQuOTg0NiAxMi4xNTYyIDEzLjcwMSAxMi4xNTgyQzExLjQ1NjcgMTIuMTY0OCA5LjIxMDQzIDEyLjE0NDIgNi45NjQxMiAxMi4xNzM1QzYuNjIyMDcgMTIuMTc4OCA2LjIzMDAxIDEyLjMxNDIgNS45NTA2NCAxMi41MTQ5QzQuNjg3MTMgMTMuNDE3NyAzLjQ1Njk2IDE0LjM2MzEgMi4yMTI3OSAxNS4yOTM5QzIuMDg1NDQgMTUuMzg5MyAxLjk0NzQyIDE1LjQ2OTkgMS43MjIwNiAxNS42MThDMS43MjIwNiAxNC41ODc4IDEuNzEwNzIgMTMuNjU5NyAxLjcyODA2IDEyLjczNDlDMS43MzQ3MyAxMi4zNzk1IDEuNjk2NzIgMTIuMTc1NSAxLjI2MjY2IDEyLjA4ODhDMC41MTcyMjYgMTEuOTM5NSAwLjAxNTgyMyAxMS4yNzE0IDAuMDExODIyNSAxMC40OTM5Qy0wLjAwMjE3OTQ4IDcuODU0OSAtMC4wMDQ4NDY1MSA1LjIxNjUzIDAuMDA5ODIyMTggMi41NzgxN0MwLjAxMzgyMjcgMS42MjQwNCAwLjcyNTkyMSAwLjg5MjYwNSAxLjY3NjcyIDAuODg4NjA1QzUuNzc1MjggMC44NzUyNyA5Ljg3MzE4IDAuODc1OTM2IDEzLjk3MTEgMC44OTEyNzJDMTQuODk1OSAwLjg5NTI3MiAxNS41ODY2IDEuNjEwNyAxNS42MzEzIDIuNTM0MTZDMTUuNjUwNiAyLjk0NDg5IDE1LjY2NCAzLjM1ODk1IDE1LjYzNCAzLjc2OUMxNS42IDQuMjE2NCAxNS43MjIgNC40MDk3NiAxNi4yMTg3IDQuMzczNzVDMTYuODcwMSA0LjMyNzc1IDE3LjUyODIgNC4zNTU3NSAxOC4xODEgNC4zNjY0MkMxOS4yNDM4IDQuMzgzMDkgMTkuOTcyNiA1LjA0Mzg0IDE5Ljk4MTkgNi4xMDU5OUMyMC4wMDkyIDguNzA2MzUgMjAuMDAyNiAxMS4zMDggMTkuOTgxOSAxMy45MDkxQzE5Ljk3MzkgMTQuNzk1OSAxOS40Njc4IDE1LjQwNTMgMTguNjE3NyAxNS41OThDMTguMzA4MyAxNS42NjczIDE4LjIyNSAxNS43OTIgMTguMjI5NyAxNi4wODI3QzE4LjI0MjMgMTYuODY4OCAxOC4yMzMgMTcuNjU0MiAxOC4yMzE3IDE4LjQzOTdDMTguMjMzIDE4LjYxOSAxOC4yMzMgMTguNzk4NCAxOC4yMzMgMTkuMTAzOFpNMTMuODIyNCAxMC40NDM5QzEzLjg2NzEgMTAuMzE4NiAxMy44OTE3IDEwLjI4MzkgMTMuODkxNyAxMC4yNDkyQzEzLjg5ODQgNy44MzgyMyAxMy44OTU3IDUuNDI4NTYgMTMuOTExMSAzLjAxNjIzQzEzLjkxMzcgMi42MjYxOCAxMy43MDEgMi42MTAxOCAxMy40MTEgMi42MTAxOEM5LjY4OTgyIDIuNjE0ODQgNS45Njk5OCAyLjYxOTUxIDIuMjQ5NDYgMi42MDU1MUMxLjgyOTQxIDIuNjA0MTcgMS43MTEzOSAyLjczNjE5IDEuNzE1MzkgMy4xNTA5MkMxLjczNDczIDUuNDEzMjMgMS43MjQ3MyA3LjY3NDg3IDEuNzI4NzMgOS45MzcxOEMxLjcyODczIDEwLjA5NTkgMS43NTYwNiAxMC4yNTUyIDEuNzc1NCAxMC40NjMzQzIuMzY0ODEgMTAuNDYzMyAyLjg5ODg5IDEwLjQ2MzMgMy41MDM2NCAxMC40NjMzQzMuNTAzNjQgMTEuMDIyIDMuNTAzNjQgMTEuNTI4NyAzLjUwMzY0IDEyLjE0NjhDNC4yMTU3NCAxMS42MTIxIDQuODEzMTUgMTEuMTM2NyA1LjQ0MTI0IDEwLjcwOTNDNS42NTUyNyAxMC41NjA2IDUuOTQ0NjQgMTAuNDYwNiA2LjIwMzM0IDEwLjQ1MzNDNy4yMzA4MiAxMC40MjUzIDguMjU4OTYgMTAuNDQyNiA5LjI4Nzc3IDEwLjQ0MzlDMTAuNzk3MyAxMC40NDM5IDEyLjMxMDIgMTAuNDQzOSAxMy44MjI0IDEwLjQ0MzlaIiBmaWxsPSIjRjIyQkIyIi8+PHBhdGggZD0iTTQuOTcyNDYgNy41NjIyNUM1LjUwMTk5IDcuNTYyMjUgNS45MzEyNiA3LjEzMjk4IDUuOTMxMjYgNi42MDM0NUM1LjkzMTI2IDYuMDczOTIgNS41MDE5OSA1LjY0NDY1IDQuOTcyNDYgNS42NDQ2NUM0LjQ0Mjk0IDUuNjQ0NjUgNC4wMTM2NyA2LjA3MzkyIDQuMDEzNjcgNi42MDM0NUM0LjAxMzY3IDcuMTMyOTggNC40NDI5NCA3LjU2MjI1IDQuOTcyNDYgNy41NjIyNVoiIGZpbGw9IiNGMjJCQjIiLz48cGF0aCBkPSJNOC4yMjI5NiA3LjU2MjI1QzguNzUyNDkgNy41NjIyNSA5LjE4MTc2IDcuMTMyOTggOS4xODE3NiA2LjYwMzQ1QzkuMTgxNzYgNi4wNzM5MiA4Ljc1MjQ5IDUuNjQ0NjUgOC4yMjI5NiA1LjY0NDY1QzcuNjkzNDMgNS42NDQ2NSA3LjI2NDE2IDYuMDczOTIgNy4yNjQxNiA2LjYwMzQ1QzcuMjY0MTYgNy4xMzI5OCA3LjY5MzQzIDcuNTYyMjUgOC4yMjI5NiA3LjU2MjI1WiIgZmlsbD0iIzJFQzVDRSIvPjxwYXRoIGQ9Ik0xMS40NzMzIDcuNTYyMjVDMTIuMDAyOSA3LjU2MjI1IDEyLjQzMjEgNy4xMzI5OCAxMi40MzIxIDYuNjAzNDVDMTIuNDMyMSA2LjA3MzkyIDEyLjAwMjkgNS42NDQ2NSAxMS40NzMzIDUuNjQ0NjVDMTAuOTQzOCA1LjY0NDY1IDEwLjUxNDUgNi4wNzM5MiAxMC41MTQ1IDYuNjAzNDVDMTAuNTE0NSA3LjEzMjk4IDEwLjk0MzggNy41NjIyNSAxMS40NzMzIDcuNTYyMjVaIiBmaWxsPSIjMkJCMTQwIi8+PC9zdmc+';
    add_menu_page(__('VABE / Button', 'vabe_button'), __('VABE / Button', 'vabe_button'), 'manage_options', basename(__FILE__), 'settings_vabe_button', $icon);
    register_setting('vabe_button', 'vabe-code', ['type' => 'string']);
}

// Display settings page
function settings_vabe_button()
{
    $logoURL = esc_url(plugin_dir_url(__FILE__) . 'img/logo.svg');
    $siteURL = esc_url('https://vabe.io/button?utm_source=wordpress_admin');

    echo '<a href="'.$siteURL.'" target="_blank"><img src="'.$logoURL.'" style="max-width: 450px; margin-top: 30px;"></a>';

    if (get_option('vabe-code')) {

        echo '<p style="font-size: 16px;">';
        echo __( 'Done! Now you can check <a href="/" target="_blank">site</a> and see button.', 'vabe-button' );
        echo '<br>';
        echo __( 'Want to change button? Just go to <a href="https://vabe.io/button"  target="_blank">vabe.io</a>, get new code and paste to form.', 'vabe-button' );
        echo '</p>';
    } else {
        echo '<p style="font-size: 16px">'.__('Welcome! There are only two simple steps to install the button:', 'vabe-button').'</p>';
        echo '<h2>'.__( 'Step 1: Get code', 'vabe-button' ).'</h2>';
        echo '<p style="font-size: 16px;">';
        echo __( 'Just go to <a href="https://vabe.io/button" target="_blank">vabe.io</a>, create your beautiful button and get code.', 'vabe-button' );
        echo '</p>';
        echo '<h2>'.__( 'Step 2: Paste the code to form', 'vabe-button' ).'</h2>';
        echo '<p style="font-size: 16px;">';
        echo __( 'Paste code you got at vabe.io into the form bellow and save. Thats all :)', 'vabe-button' );
        echo '</p>';

    }
    echo '<style>#wpcontent{background: #fff}</style>';

    echo '<form action="options.php" method="POST">';
    settings_fields('vabe_button');
    do_settings_sections('options.php" method="POST">');
    settings_fields('vabe_button');
    echo '<textarea cols="80" rows="15" name="vabe-code">' . esc_attr(get_option('vabe-code')) . '</textarea>';
    submit_button();
    echo '</form>';
}


function vabe_code()
{
    echo get_option('vabe-code');
}

add_action('admin_menu', 'setup_vabe_button');
add_action('wp_footer', 'vabe_code');

add_filter( 'plugin_action_links_'.plugin_basename( plugin_dir_path( __FILE__ ) . 'vabe_button.php'), 'admin_plugin_settings_link_vabe_button' );


function admin_plugin_settings_link_vabe_button( $links ) {
    $url = esc_url( add_query_arg(
        'page',
        'vabe_button.php',
        get_admin_url() . 'admin.php'
    ) );
    $settings_link = '<a href="'.$url.'">'.__('Settings').'</a>';
    array_unshift( $links, $settings_link );
    return $links;
}