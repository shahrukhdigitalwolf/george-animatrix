<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Register For Free Demo Classes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background:#000; padding:10px;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <div class="modal-body">
         <form id="bigcontactformpopup" class="big-contact-form" action="mailform.php"  onsubmit="return validatepopupForm()"  method="post">
           <input type="text" name="Name" class="form-control" placeholder="Enter your name..">
             <input type="email" name="Email" class="form-control" placeholder="Enter email..">
               <input type="text" name="Phone" class="form-control" placeholder="Your phone..">
                 <select id="Course" name="Course" class="form-control">
                                      <option value="0">Course</option>
                                      <option value="animation">Animation</option>
                                      <option value="vfx">VFX</option>
                                </select>
                                <input type="text"  name="City" class="form-control" placeholder="City..">
                   <button type="submit" class="btn btn-primary" name="submit"  id="form-submit">Submit</button>
                 </form>
      </div>
    </div>
  </div>
</div>
