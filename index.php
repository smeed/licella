<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Licella Hero Animation</title>
  <link rel="stylesheet" href="css/licella-hero-animation.css">
</head>

<body>

  <!-- Add your site or application content here -->
  
  <div id="background">

    <div id="left-side">
      [left side]
    </div>

    <div id="right-side">
        <div id="hero-graphic">
          <div class="ball ball-right"></div>
          <div class="ball ball-bottom"></div>
          <div class="ball ball-left"></div>

          <div class="mask mask-right">
            <div class="graphic"></div>
          </div>
          <div class="mask mask-bottom">
            <div class="graphic"></div>
          </div>
          <div class="mask mask-left">
            <div class="graphic"></div>
          </div>

        </div>
    </div>
  </div>


<script>
  function adjustScale() {
    const heroGraphic = document.getElementById('hero-graphic');
    
    // Get the window width
    const windowWidth = window.innerWidth;
    
    // Define the minimum and maximum scale values
    const minScale = 0.25;
    const maxScale = 1;
    
    // Define the range of window width for scaling
    const minWidth = 600;  // Minimum window width for 1x scale (maximum scale)
    const maxWidth = 1200; // Maximum window width for 0.5x scale (minimum scale)
    
    // Calculate scale based on the window width (clamped between min and max scale)
    let scale = (windowWidth - minWidth) / (maxWidth - minWidth);
    scale = Math.max(minScale, Math.min(maxScale, scale));

    // Apply the scale to the element
    heroGraphic.style.transform = `scale(${scale})`;
  }

  // Initial scale adjustment on page load
  adjustScale();

  // Adjust scale dynamically on window resize
  window.addEventListener('resize', adjustScale);
</script>

</body>

</html>
