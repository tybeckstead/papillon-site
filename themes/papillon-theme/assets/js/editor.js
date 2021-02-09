wp.blocks.registerBlockStyle( 'core/quote', {
    name: 'fancy-quote',
    label: 'Fancy Quote'
} );

wp.blocks.registerBlockStyle( 'core/button', {
    name: 'main-btn',
    label: 'Main Button'
} );


wp.domReady( function () {
    wp.blocks.unregisterBlockStyle( 'core/quote', 'large');
    wp.blocks.unregisterBlockStyle( 'core/button', 'fill');
    wp.blocks.unregisterBlockStyle( 'core/button', 'outline');
} );