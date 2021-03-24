wp.blocks.registerBlockStyle( 'core/separator', {
    name: 'gold-separator',
    label: 'Gold Separator'
} );

wp.blocks.registerBlockStyle( 'core/button', {
    name: 'is-btn',
    label: 'The Button'
} );

wp.blocks.registerBlockStyle( 'core/button', {
    name: 'contact-btn',
    label: 'Contact Button'
} );

wp.blocks.registerBlockStyle( 'core/image', {
    name: 'featured-image',
    label: 'Featured Image'
} );

wp.blocks.registerBlockStyle( 'core/image', {
    name: 'item-image',
    label: 'Item Image'
} );

wp.blocks.registerBlockStyle( 'core/image', {
    name: 'featured-image',
    label: 'Featured Image'
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


wp.blocks.registerBlockStyle( 'core/heading', {
    name: 'about-page-numbers-primary',
    label: 'About Page Number Sub-Heading'
} );


wp.domReady( function () {
    wp.blocks.unregisterBlockStyle( 'core/quote', 'large');
    wp.blocks.unregisterBlockStyle( 'core/button', 'fill');
    wp.blocks.unregisterBlockStyle( 'core/button', 'outline');
} );





