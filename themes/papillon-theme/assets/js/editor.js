//% ADDED CUSTOM WORDPRESS BLOCK ELEMENTS

//! REGISTERED BUTTON BLOCK ELEMENTS
    //$ MAIN BUTTON ELEMENT
    wp.blocks.registerBlockStyle( 'core/button', {
        name: 'is-btn',
        label: 'The Button'
    } );

    //$ CONTACT BUTTON ELEMENT
    wp.blocks.registerBlockStyle( 'core/button', {
        name: 'contact-btn',
        label: 'Contact Button'
    } );

//! REGISTERED IMAGE BLOCK ELEMENTS
    //$ FEATURED IMAGE ELEMENT
    wp.blocks.registerBlockStyle( 'core/image', {
        name: 'featured-image',
        label: 'Featured Image'
    } );

    //$ ITEM IMAGE ELEMENT
    wp.blocks.registerBlockStyle( 'core/image', {
        name: 'item-image',
        label: 'Item Image'
    } );

//! REGISTERED TEXT BLOCK ELEMENTS
    //$ BODY PARAGRAPH ELEMENT
    wp.blocks.registerBlockStyle( 'core/paragraph', {
        name: 'body-paragraph',
        label: 'body Paragraph'
    } );

    //$ MAIN HEADING ONE ELEMENT
    wp.blocks.registerBlockStyle( 'core/heading', {
        name: 'main-heading',
        label: 'Main Heading One'
    } );

    //$ MAIN HEADING TWO ELEMENT
    wp.blocks.registerBlockStyle( 'core/heading', {
        name: 'extra-main-heading',
        label: 'Main Heading Two'
    } );

    //$ SUB-HEADING ELEMENT
    wp.blocks.registerBlockStyle( 'core/heading', {
        name: 'sub-heading-primary',
        label: 'Sub Heading'
    } );

    //$ ABOUT NUMBER SUB-HEADING TEXT
    wp.blocks.registerBlockStyle( 'core/heading', {
        name: 'about-page-numbers-primary',
        label: 'About Page Number Sub-Heading'
    } );


//! UNREGISTER BLOCK STYLES
wp.domReady( function () {
    wp.blocks.unregisterBlockStyle( 'core/quote', 'large');
    wp.blocks.unregisterBlockStyle( 'core/button', 'fill');
    wp.blocks.unregisterBlockStyle( 'core/button', 'outline');
} );





