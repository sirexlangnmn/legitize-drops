<!-- ============================================================== -->
<!-- modal Campaign insert -->
<!-- ============================================================== -->
<div id="modal_campaign_insert" class="modal fade" tabindex="-1" 
    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Campaign Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="m-t-40" novalidate>
                     <div class="form-group">
                        <select class="form-control custom-select">
                            <option>-- Choose Campaign --</option>
                            <option>Translation</option>
                            <option>Signature</option>
                            <option>Facebook</option>
                            <option>Twitter</option>
                            <option>Telegram</option>
                            <option>Reddit</option>
                            <option>Media</option>
                            <option>Content Creation</option>
                            <option>Bonus Public</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <h5>Allocated Token </h5>
                        <div class="controls">
                            <input type="text" name="allocated_token" placeholder="Allocated Token" class="form-control" required data-validation-required-message="This field is required"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Allocated Participants </h5>
                        <div class="controls">
                            <input type="text" name="allocated_participants" placeholder="Allocated Participants" class="form-control" required data-validation-required-message="This field is required"> 
                        </div>
                    </div>
                       
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-success waves-effect waves-light"><i class="fa fa-plus"></i>&nbsp Add
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End modal campaign insert -->
<!-- ============================================================== -->






