<?php
$PageTitle = "ContactUS";
include './Common/Header.php';
?>
<div class="mb-3 w-75 mt-5 m-auto mb-5" style="height:66vh;">
    
    <label class="form-label mt-2 pb-4">Name</label>
    <input
        type="text"
        class="form-control p-3"
        name=""
        id=""
        placeholder="Enter Your Name" />
    <label class="form-label mt-2 pb-4">Email</label>
    <input
        type="email"
        class="form-control p-3"
        name=""
        id=""
        aria-describedby="emailHelpId"
        placeholder="Enter Your Email" />
        <label class="form-label mtb-2 p-4">Phone Number</label>
    <input
        type="number"
        class="form-control p-3"
        name=""
        id=""
        placeholder="Enter Your Number" />
    <button
        type="submit"
        class="btn btn-primary mt-5">
        Submit
    </button>
</div>
<?php
include_once ("./Common/footer.php");
?>