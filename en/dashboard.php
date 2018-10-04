<?php include 'assets/header.php' ?>
				<div class="row justify-content-center pt-5">
					<div class="table-responsive px-3 px-sm-0">
	          <table class="table table-sm table-dark text-warning table-hover table-striped text-left">
	            <thead>
	              <tr>
	                <th>Position</th>
									<th>Member</th>
									<th>Location</th>
	                <th>Teacher</th>
	                <th>Points</th>
	              </tr>
	            </thead>
	            <tbody></tbody>
	            <tbody>
	              <tr>
	                <td class="text-center" colspan="5"><button style="box-shadow: none" type="button" class="btn btn-outline-warning rounded-0 px-5">More ...</button></td>
	              </tr>
	            </tbody>
	          </table>
					</div>
				</div>
	    </div>
	  </div>
		<?php include 'assets/footer.php' ?>
	</div>
  <script type="text/javascript">
    $(document).ready(function() {
			$("#spinner").addClass("d-none");
			$("a[href='dashboard.php']").addClass("active");
			var from,
			username = "<?php echo $log_row['fname'].' '.$log_row['lname'] ?>";
			function getData(frm) {
				$.ajax({
					url: "../include/getranking.php",
					type: "POST",
					data: {
						from: frm,
					},
					error: function(stt,xhr,err) {
						console.log(err);
					},
					success: function(res) {
						var data = JSON.parse(res);
						for (var key in data) {
							$("tbody:first").append("<tr><td>"+key+"</td><td>"+data[key][0]+" "+data[key][1]+"</td><td>"+data[key][2]+"</td><td>"+data[key][3]+"</td><td>"+data[key][4]+"</td></tr>");
						}
					},
					complete: function() {
            $("td:contains("+username+")").parent().addClass("bg-warning text-dark");
            $("tbody:last").find("button").html("More ...");
          }
				});
			}
      from = 0;
      getData(from);
      $("tbody:last").on("click", "button", function(){
        $(this).html("Please wait<i class='fas fa-spinner fa-spin fa-pulse mr-2'></i>");
        from += 10;
        getData(from);
      });
    });
  </script>
</body>
</html>
