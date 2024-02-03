hs.graphicsDir = 'highslide/graphics/';
hs.showCredits = 0;
hs.padToMinWidth = true;
hs.align = 'center';
hs.transitions = ['expand', 'crossfade'];
hs.outlineType = 'rounded-white';
hs.fadeInOut = true;
hs.numberPosition = 'caption';
hs.dimmingOpacity = 0.75;
hs.wrapperClassName = 'dark borderless floating-caption';


// Add the controlbar
if (hs.addSlideshow) hs.addSlideshow({
    //slideshowGroup: 'group1',
    interval: 5000,
    repeat: false,
    useControls: true,
    fixedControls: 'fit',
    overlayOptions: {
        opacity: .75,
        position: 'bottom center',
        hideOnMouseOut: true
    }
});

var galleryOptions = {
    slideshowGroup: 'gallery',
    wrapperClassName: 'dark',
    //outlineType: 'glossy-dark',
    dimmingOpacity: 0.8,
    align: 'center',
    transitions: ['expand', 'crossfade'],
    fadeInOut: true,
    wrapperClassName: 'borderless floating-caption',
    marginLeft: 100,
    marginBottom: 80,
    numberPosition: 'caption'
};