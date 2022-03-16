// Wait for API to initialize
(window.AmpVideoIframe = window.AmpVideoIframe || [])
.push(function(ampIntegration) {
    var myVideo = document.querySelector('#my-video');

    // Listen to element that uses Video.JS.
    ampIntegration.listenTo('voicetv', myVideo);
});