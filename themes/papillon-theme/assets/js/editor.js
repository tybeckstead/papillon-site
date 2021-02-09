wp.blocks.registerBlockStyle( 'core/quote', {
    name: 'fancy-quote',
    label: 'Fancy Quote'
} );

wp.blocks.registerBlockStyle( 'core/button', {
    name: 'main-btn',
    label: 'Main Button'
} );

wp.blocks.registerBlockStyle( 'core/paragraph', {
    name: 'body-paragraph',
    label: 'body Paragraph'
} );

wp.blocks.registerBlockStyle( 'core/heading', {
    name: 'main-heading',
    label: 'Main Heading One'
} );

wp.blocks.registerBlockStyle( 'core/heading', {
    name: 'extra-main-heading',
    label: 'Main Heading Two'
} );

wp.blocks.registerBlockStyle( 'core/heading', {
    name: 'sub-heading-primary',
    label: 'Sub Heading'
} );


wp.domReady( function () {
    wp.blocks.unregisterBlockStyle( 'core/quote', 'large');
    wp.blocks.unregisterBlockStyle( 'core/button', 'fill');
    wp.blocks.unregisterBlockStyle( 'core/button', 'outline');
} );