<div class="container">
  <div class="page-header">
    <h3>Please login to access system</h3>
  </div>
  <?php $T->snippet('flash-message'); ?>
  <?php echo $form; ?>
</div>
<!-- this one is necessary to prevent funny logout situations
   where session expired but we are still in middle of a page -->
<script type="text/javascript">
$(document).ready(function () {
  if (window.top.location != '<?php $url = $request->getBaseUrl() . $config->getRoutingLinkFromPage("Login/index"); echo $url; ?>') {
    window.top.location = '<?php echo $url ?>' ;
  }
});
</script>

