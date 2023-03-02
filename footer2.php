<footer id="footer" class="footer">

    <div class="copyright">
      &copy; Copyright <strong><span>Sodo City RTA</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
Designed by <a href="mailto:chereyaya16@gmail.com" target="_blank">G8</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center bg-dark justify-content-center" data-bs-toggle="tooltip" data-bs-placement="left" title="back to top"><i class="bx bxs-chevron-up-circle"></i></a>
<div class="card">
            
 
  <!-- Modal mission Scrollable -->
              <div class="modal fade" id="mission" tabindex="-1">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Mission</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                     <div class="mb-3 mt-3">
          <?php
          include('dbcon.php');

    $status="On";
    $query = "SELECT * FROM mission where status='$status'";
    $result = mysqli_query($conn,$query)or die(mysqli_error());
    $row=mysqli_fetch_array($result);
    $mission=$row['en_mission'];
    $vission=$row['en_vission'];
    
        ?>
                <p><?php echo $mission;?></p>
         </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
<!-- End Modal mission Scrollable-->

 <!-- Modal vision Scrollable -->
              <div class="modal fade" id="vision" tabindex="-1">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">vision</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="mb-3 mt-3">
          <p><?php echo $vission;?></p>
         </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
<!-- End Modal vision Scrollable-->



<!-- Modal history Scrollable -->
              <div class="modal fade" id="history" tabindex="-1">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">history</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
         <div class="mb-3 mt-3">
         <p>The Ethiopian road transport authority (R.T.A) is a public transport authority based in addis ababa, Ethiopia with regional branches like SNNPR road transport authority. It was originally founded as the road transport administration in 1967 by proclamation No 256/67 but restructured and became the road transport authority (RTA) in 1976, following proclamation No 107/76. The RTA states that its mission is “To ensure the provision of a modern, integrated and safe road transport services to meet the needs of all the communities for strong and unitary economic and political system in Ethiopia”. In doing so they attempt to promote an efficient road service, to coordinate and strengthen the road traffic safety and to develop the transport data base system to enhance research for the development of the sector.
        In 2005, the Ethiopian government reorganized the transport sector and although the previously independent urban transport authority, the railway regulatory authority, the aviation authority, the airport administration authority and the maritime regulatory authority merged into the Ethiopian transport authority, the road transport authority remained independent.
        The wolaita sodo city road transport is branch of RTA which is responsible to SNNPR road transport office.  
</p>
         </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
<!-- End Modal history Scrollable-->
          </div>