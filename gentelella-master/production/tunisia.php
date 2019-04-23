<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>JQVMap - Tunisia Map</title>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">

  <link href="dist/jqvmap.css" media="screen" rel="stylesheet" type="text/css"/>

  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="dist/jquery.vmap.js"></script>
  <script type="text/javascript" src="dist/maps/jquery.vmap.tunisia.js" charset="utf-8"></script>
  <style>
  body {font-family: Arial, Helvetica, sans-serif;}

  /* The Modal (background) */
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  }

  /* Modal Content */
  .modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
  }

  /* The Close Button */
  .close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }
  </style>
  <script>




    jQuery(document).ready(function () {
      jQuery('#vmap').vectorMap({
        map: 'tunisia',
        onRegionClick: function (element, code, region) {
          var message = 'Vous avez cliqué sur  "'
            + region
            + '" Elle comprend: '
            + '55'
            + ' commande(s)';
           window.open('nbr.php?n='+region);


        }
      });
    });
  </script>

</head>
<body>
<div id="vmap" style="width: 700px; height: 637px;"></div>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>
</body>
</html>
