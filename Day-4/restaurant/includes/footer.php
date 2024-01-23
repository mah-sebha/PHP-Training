    <footer class="container">
        <hr>
        <p>&copy; <?php echo date('Y'); ?>. All rights reserved.</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
    $(document).ready(function() {
        $('.dish-row').find('input[type="number"]').attr('disabled', true);
        $('.dish-row').find('input[type="number"]').val(0);
        $('.dish-row input[type="checkbox"]').change(function() {
            let qtyInput = $(this).closest('.dish-row').find('input[type="number"]');
            if ($(this).is(':checked')) {
                qtyInput.val(1);
                qtyInput.attr('disabled', false);
            } else {
                qtyInput.val(0);
                qtyInput.attr('disabled', true);
            }
        });
    });
</script>
  </body>
</html>