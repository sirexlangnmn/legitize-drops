<!-- ============================================================== -->
<!-- modal Campaign update -->
<!-- ============================================================== -->
<div id="modal_campaign_update" class="modal fade" tabindex="-1" 
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
                        <h5>Campaign </h5>
                        <div class="controls">
                            <input type="text" name="allocated_token" placeholder="Allocated Token" class="form-control" required data-validation-required-message="This field is required"> 
                        </div>
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
                    <div class="form-group">
                        <select class="form-control custom-select">
                            <option>-- Status --</option>
                            <option>Active Campaign</option>
                            <option>Closed Participation</option>
                            <option>Finished Campaign</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control custom-select">
                            <option>-- Remarks --</option>
                            <option>The participation period for the Campaign is ongoing.</option>
                            <option>The participation period for the Campaign has been passed.</option>
                            <option>Finished and Successful.</option>
                            <option>Finished but Failed.</option>
                        </select>
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
<!-- End modal campaign update -->
<!-- ============================================================== -->






