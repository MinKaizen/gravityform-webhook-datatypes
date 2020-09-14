<?php
class GravityformWebhookDatatypesPlugin {
    public function init() {
        $this->add_filters();
    }


    private function add_filters() {
        $this->add_json_filter();
        $this->add_int_filter();
    }


    // Send Gravity Form Webhook data as JSON objects
    private function add_json_filter() {
        add_filter( 'gform_webhooks_request_data', function ( $request_data, $feed ) {
            foreach ( $request_data as $key => $value ) {
                if ( strpos( $key, '_as_json' ) !== false ) {
                    $request_data [ str_replace( "_as_json", "", $key ) ] = json_decode( str_replace( "'", '"', $value), true );
                    unset( $request_data [ $key ] );
                }
            }
            return $request_data;
        }, 10, 2 );
    }


    // Send Gravity Form Webhook data as int
    private function add_int_filter() {
        add_filter( 'gform_webhooks_request_data', function ( $request_data, $feed ) {
            foreach ( $request_data as $key => $value ) {
                if ( strpos( $key, '_as_int' ) !== false ) {
                    $request_data [ str_replace( "_as_int", "", $key ) ] = intval( $value );
                    unset( $request_data [ $key ] );
                }
            }
            return $request_data;
        }, 10, 2 );
    }


}