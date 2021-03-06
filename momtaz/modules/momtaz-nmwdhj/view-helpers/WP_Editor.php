<?php
/**
 * The WP_Editor element view class.
 *
 * @since 1.0
 */
class Momtaz_Nmwdhj_View_WP_Editor extends Momtaz_Nmwdhj_View {

    /**
     * Render the element view, and return the output.
     *
     * @since 1.0
     * @return string
     */
    public function render( Momtaz_Nmwdhj_Element $element ) {

        ob_start();

            // Editor settings.
            $settings = wp_parse_args( $element->get_option( 'settings' ), array(
                'textarea_name' => $element->get_name(),
            ) );

            // Render the WP editor.
            wp_editor( $element->get_value(), $element->get_ID(), $settings );

            $output = ob_get_contents();

        ob_end_clean();

        return $output;

    } // end render()

} // end Class Momtaz_Nmwdhj_View_WP_Editor