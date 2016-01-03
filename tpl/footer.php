<!-- modal -->
<div id="generalModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title"></h4>
          </div>
          <div class="modal-body"></div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
    </div>
  </div>
</div>

<?php $timestamp = time(); ?>
<input type="hidden" id="upload-tm" value="<?php echo $timestamp; ?>" />
<input type="hidden" id="upload-token" value="<?php echo md5('S4lt' . $timestamp); ?>" />

<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>
<script src="js/jquery.uploadify.min.js" type="text/javascript"></script>
<script src="js/lightbox.min.js" type="text/javascript"></script>
<!-- <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script> -->
<script src="js/jquery.messages.js" type="text/javascript"></script>
<!-- for validator -->
<script src="validator/js/formValidation.min.js"></script>

<script src="validator/js/formValidationBootstrap.js"></script>

<script src="validator/js/custom.js"></script>

</body>
</html>