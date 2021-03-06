<?php
/**
 * The Description decorator class.
 *
 * @since 1.0
 */
class Momtaz_Nmwdhj_Decorator_Description extends Momtaz_Nmwdhj_Decorator {

    // Output

    /**
     * Display the element output.
     *
     * @since 1.0
     */
    public function output() {
        echo $this->get_output();
    } // end output()

    /**
     * Get the element output.
     *
     * @since 1.0
     * @return string
     */
    public function get_output() {

        // Get the description text.
        $text = $this->get_description();

        // Get the description tag.
        $tag = $this->get_description_tag();

        // Get the description attributes.
        $atts = $this->get_description_atts();

        // Get the element output.
        $output = $this->get_element()->get_output();

        if ( empty( $text ) )
            return $output;

        $output .= '<'. $tag . strval( $atts ) .'>' . $text . '</'. $tag .'>';

        // Return the output.
        return $output;

    } // end get_output()

    // Description Tag.

    /**
     * Set the description tag.
     *
     * @since 1.0
     * @return Momtaz_Nmwdhj_Decorator_Label
     */
    public function set_description_tag( $tag ) {
        $this->set_option( 'description_tag', $tag );
        return $this;
    } // end set_description_tag()

    /**
     * Get the description tag.
     *
     * @since 1.0
     * @return string
     */
    public function get_description_tag() {
        return $this->get_option( 'description_tag', 'p' );
    } // end get_description_tag()

    // Description Attributes.

    /**
     * Set the description attributes.
     *
     * @since 1.0
     * @return Momtaz_Nmwdhj_Decorator_Label
     */
    public function set_description_atts( $atts ) {
        $this->set_option( 'description_atts', $atts );
        return $this;
    } // end set_description_atts()

    /**
     * Get the description attributes.
     *
     * @since 1.0
     * @return Momtaz_Nmwdhj_Attributes
     */
    public function get_description_atts() {

        $atts = $this->get_option( 'description_atts', array(
            'class' => 'help',
        ) );

        return momtaz_nmwdhj_atts( $atts );

    } // end get_description_atts()

    // Description Text.

    /**
     * Set the description text.
     *
     * @since 1.0
     * @return Momtaz_Nmwdhj_Decorator_Label
     */
    public function set_description( $text ) {
        $this->set_option( 'description', $text );
        return $this;
    } // end set_description()

    /**
     * Get the description text.
     *
     * @since 1.0
     * @return string
     */
    public function get_description() {
        return $this->get_option( 'description' );
    } // end get_description()

} // end Class Momtaz_Nmwdhj_Decorator_Description