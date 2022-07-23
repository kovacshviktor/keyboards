<?php
$pagename  = 'Chechen Language Keyboard Help';
$pagetitle = $pagename;
// Header
require_once('header.php');
?>

  <h1>Start Using Chechen Latin Keyboard</h1>

  <p>
    Chechen Latin Keyboard v1.0.
  </p>
  <p>

  </p>

  <h1>Keyboard Layout</h1>
  <div id="layout"></div>


  <script>
    document.addEventListener('DOMContentLoaded', documentReady());

    function getOS() {
      let userAgent = window.navigator.userAgent,
        platform = window.navigator.platform,
        macosPlatforms = ['Macintosh', 'MacIntel', 'MacPPC', 'Mac68K'],
        windowsPlatforms = ['Win32', 'Win64', 'Windows', 'WinCE'],
        iosPlatforms = ['iPhone', 'iPad', 'iPod'],
        os = null;

      if (macosPlatforms.indexOf(platform) !== -1) {
        os = 'macos';
      } else if (iosPlatforms.indexOf(platform) !== -1) {
        os = 'iphone';
      } else if (windowsPlatforms.indexOf(platform) !== -1) {
        os = 'windows';
      } else if (/Android/.test(userAgent)) {
        os = 'android';
      } else if (!os && /Linux/.test(platform)) {
        os = 'linux';
      }

      return os;
    }

    function documentReady() {
      const layout = document.getElementById('layout');

      const prefix = getOS();

      const mobileLayouts = [{
        name: 'Lower case layout',
        layout: '_default',
        helpText: ''
      }, {
        name: 'Upper case layout',
        layout: '_default_shift',
        helpText: ''
      }, {
        name: 'Lower case with long press',
        layout: '_default_longpress',
        helpText: ''
      }, {
        name: 'Upper case with long press',
        layout: '_shift_longpress',
        helpText: ''
      }, {
        name: 'Upper case with caps lock',
        layout: '_default_capslock',
        helpText: ''
      }, {
        name: 'Lower case layout with right alt',
        layout: '_rightalt',
        helpText: ''
      }, {
        name: 'Upper case layout with right alt',
        layout: '_rightalt_shift',
        helpText: ''
      }, {
        name: 'Upper case layout with caps lock and right alt',
        layout: '_rightalt_capslock',
        helpText: ''
      }, {
        name: 'Numerals',
        layout: '_numerals',
        helpText: ''
      }, {
        name: 'Symbols',
        layout: '_symbols',
        helpText: ''
      }];

      const desktopLayouts = [{
        name: 'Lower case layout',
        layout: 'desktop_default',
        helpText: ''
      }, {
        name: 'Upper case layout',
        layout: 'desktop_shift',
        helpText: ''
      }, {
        name: 'Lower case layout with right alt',
        layout: 'desktop_rightalt',
        helpText: ''
      }, {
        name: 'Upper case layout with right alt',
        layout: 'desktop_rightalt_shift',
        helpText: ''
      }];

      if (prefix === 'iphone' || prefix === 'android') {
        for (let i = 0; i < mobileLayouts.length; i++) {

          let wrapper = document.createElement('div');
          let img = document.createElement('img');
          let label = document.createElement('h2');
          let helpText = document.createElement('p');

          img.src = prefix + mobileLayouts[i].layout + '.png';
          img.style.width = '100%';

          label.innerText = mobileLayouts[i].name;
          helpText.innerText = mobileLayouts[i].helpText;

          wrapper.appendChild(label);
          wrapper.appendChild(helpText);
          wrapper.appendChild(img);

          layout.appendChild(wrapper);
        }
      } else {
        for (let i = 0; i < desktopLayouts.length; i++) {

          let wrapper = document.createElement('div');
          let img = document.createElement('img');
          let label = document.createElement('h2');
          let helpText = document.createElement('p');

          img.src = desktopLayouts[i].layout + '.png';
          img.style.width = '100%';

          label.innerText = desktopLayouts[i].name;
          helpText.innerText = desktopLayouts[i].helpText;

          wrapper.appendChild(label);
          wrapper.appendChild(helpText);
          wrapper.appendChild(img);

          layout.appendChild(wrapper);
        }
      }
    }
  </script>
