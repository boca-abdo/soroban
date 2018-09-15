<?php include 'assets/header.php' ?>
				<div class="row justify-content-center pt-5">
          <table class="table table-sm table-dark text-warning table-hover table-striped text-right">
            <thead>
              <tr>
                <th>المركز</th>
                <th>العضو</th>
                <th>النقاط</th>
              </tr>
            </thead>
            <tbody></tbody>
            <tbody>
              <tr>
                <td class="text-center" colspan="3"><button style="box-shadow: none" type="button" class="btn btn-outline-warning rounded-0 px-5">المزيد ...</button></td>
              </tr>
            </tbody>
          </table>
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
							$("tbody:first").append("<tr><td>"+key+"</td><td>"+data[key][0]+" "+data[key][1]+"</td><td>"+data[key][2]+"</td></tr>");
						}
					},
					complete: function() {
            $("td:contains("+username+")").parent().addClass("bg-warning text-dark");
            $("tbody:last").find("button").html("المزيد ...");
          }
				});
			}
      from = 0;
      getData(from);
      $("tbody:last").on("click", "button", function(){
        $(this).html("المرجو الانتظار<i class='fas fa-spinner fa-spin fa-pulse mr-2'></i>");
        from += 10;
        getData(from);
      });
    });
  </script>
</body>
</html>
