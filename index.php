<?php
    $titlePage = "index";
    include "include/header.php";
    include "include/nav.php";
?>
        <div id="map" class="map-orange"></div>
        <div class="check-container">
            <div class="row">
                <div class="col-md-4">
                    <label class="check-box">
                    <input type="checkbox" class="checkinputbox">
                    <span class="">Coding School</span> 
                    </label>
                    <label class="check-box">
                    <input type="checkbox" class="checkinputbox">
                    <span class="">Fablab</span> 
                    </label>
                    <label class="check-box">
                    <input type="checkbox" class="checkinputbox">
                    <span class="">Big</span> 
                    </label>
                    <label class="check-box">
                    <input type="checkbox" class="checkinputbox">
                    <span class="">Coding Academy</span> 
                    </label>
                    <label class="check-box">
                    <input type="checkbox" class="checkinputbox">
                    <span class="">Al</span> 
                    </label>
                </div>
                <div class="col-md-4">
                    <label class="check-box">
                    <input type="checkbox" class="checkinputbox">
                    <span class="">Inv</span> 
                    </label>
                    <label class="check-box">
                    <input type="checkbox" class="checkinputbox">
                    <span class="">Digital Center</span> 
                    </label>
                </div>
            </div>
        </div>





<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
<?php include "include/footer.php"; ?>
      
    

