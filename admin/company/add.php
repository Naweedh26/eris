<?php
if (!isset($_SESSION['ADMIN_USERID'])) {
    redirect(web_root . "admin/index.php");
}
?>

<form class="form-horizontal span6" action="controller.php?action=add" method="POST">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add New Company</h1>
        </div>
    </div> 

    <div class="form-group">
        <div class="col-md-8">
            <label class="col-md-4 control-label" for="COMPANYNAME">Company Name:</label>
            <div class="col-md-8">
                <input class="form-control input-sm" id="COMPANYNAME" name="COMPANYNAME" placeholder="Company Name" type="text" required autocomplete="off">
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8">
            <label class="col-md-4 control-label" for="COMPANYADDRESS">Company Address:</label> 
            <div class="col-md-8">
                <textarea class="form-control input-sm" id="COMPANYADDRESS" name="COMPANYADDRESS" placeholder="Company Address" required onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"></textarea>
            </div>
        </div>
    </div> 

    <div class="form-group">
        <div class="col-md-8">
            <label class="col-md-4 control-label" for="COMPANYCONTACTNO">Company Contact No.:</label>
            <div class="col-md-8">
                <input class="form-control input-sm" id="COMPANYCONTACTNO" name="COMPANYCONTACTNO" placeholder="Company Contact No." type="text" required autocomplete="off">
            </div>
        </div>
    </div>  

    <div class="form-group">
        <div class="col-md-8">
            <div class="col-md-4 control-label"></div>  
            <div class="col-md-8">
                <button class="btn btn-primary btn-sm" name="save" type="submit">
                    <span class="fa fa-save fw-fa"></span> Save
                </button>
            </div>
        </div>
    </div> 
</form>
