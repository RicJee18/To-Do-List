 <!-- Optional JavaScript; choose one of the two! -->
    
 <script src="sweetalert2.all.min.js"></script>
 <script src="sweetalert2.min.js"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
  <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  
    <script>

    // Add a "checked" symbol when clicking on a list item
    $(function(){
      var $curParent, Content;
      $(document).delegate("td.task","click", function(){
        if($(this).closest("s").length) {
          Content = $(this).parent("s").html();
          $curParent = $(this).closest("s");
          $(Content).insertAfter($curParent);
          $(this).closest("s").remove();
        }
        else {
          $(this).wrapAll("<s />");
        }
      });
    });
</script>
  </body>
</html> 
