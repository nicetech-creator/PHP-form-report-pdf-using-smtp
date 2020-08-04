<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Form email</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">-->

    <!-- Bootstrap core CSS -->
    <link href="./assets/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/dist/css/bootstrap-datepicker3.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .input-group-addon {
        padding: 10px 12px;
        font-size: 14px;
        font-weight: 400;
        line-height: 1;
        color: #555;
        text-align: center;
        background-color: #eee;
        border: 1px solid #ccc;
        border-radius: 4px;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container pt-5">
        <h4 class="mb-3 mt-5">MANUAL TIME ENTRY</h4>
        <form class="needs-validation" action="./control.php" method="post" novalidate>
          <input type="hidden" value="manual-time-entry" name="submit_type">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="employeeNo">Employee No: <span class="text-danger">*</span></label>
              <input type="number" class="form-control" id="employeeNo" name="employeeNo" type="number" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid Employee No is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="employeeName">Employee Name: <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="employeeName" name="employeeName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid Employee Name is required.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="supervisor">Select your Supervisor: <span class="text-danger">*</span></label>
            <select class="custom-select d-block w-100" id="supervisor" name="supervisor" required>
              <option value="">Choose...</option>
              <option value="johndoe123456@gmail.com">John Doe</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid supervisor.
            </div>
          </div>

          <div class="mb-3">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="occurrenceDate">Date of Occurrence: <span class="text-danger">*</span></label>
                <div class="input-group date">
                  <input id="occurrenceDate" name="occurrenceDate" type="text" class="form-control" style="border-right: 0;" required><span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
                  <div class="invalid-feedback">
                    Please enter a valid date
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="explanationCode">Explanation Code: <span class="text-danger">*</span></label>
                <select class="custom-select d-block w-100" id="explanationCode" name="explanationCode" required>
                  <option value="">Choose...</option>
                  <option value="01">Forgot to Clock In/Out</option>
                  <option value="02">Input Error</option>
                  <option value="03">Out of Shop / Errand</option>
                  <option value="04">System Down</option>
                  <option value="05">skipped Lunch</option>
                  <option value="06">Took Lunch (Friday)</option>
                  <option value="07">Vacation</option>
                  <option value="08">Sick-Pay</option>
                  <option value="09">Other / Explain</option>
                </select>
                <!-- <input type="text" name="explanationCodeOther" id="otherExplanationCode" class="form-control mt-2" placeholder="Took Certification Test..." style="display: none;"> -->
                <textarea name="explanationCodeOther" id="otherExplanationCode" class="form-control mt-2" placeholder="Took Certification Test..." style="display: none;"></textarea>
                <div class="invalid-feedback">
                  Please select a valid explanation code.
                </div>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="dept">Dept #: <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="dept" name="dept" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid dept is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="payStatus">Pay Status: <span class="text-danger">*</span></label>
                <select class="custom-select d-block w-100" id="payStatus" name="payStatus" required>
                  <option value="">Choose...</option>
                  <option value="01">Weekly - Hourly</option>
                  <option value="02">Weekly - Salary</option>
                  <option value="03">Bi - Weekly - Salary</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid pay status.
                </div>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="inTime">Clock-in Time: </label>
                <input type="number" class="form-control" id="inTime" name="inTime" placeholder="" value="">
                <div class="invalid-feedback">
                  
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="outTime">Clock-out Time: </label>
                <input type="number" class="form-control" id="outTime" name="outTime" placeholder="" value="">
                <div class="invalid-feedback">
                  
                </div>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="workOrder">Work Order #: </label>
                <input type="text" class="form-control" id="workOrder" name="workOrder" placeholder="" value="">
                <div class="invalid-feedback">
                  
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="seq">Seq #: </label>
                <input type="text" class="form-control" id="seq" name="seq" placeholder="" value="">
                <div class="invalid-feedback">
                  
                </div>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <div class="row">
              <div class="col-md-7 mb-3">
                <label for="totalInTimeHour">Total Clocked-in Time: </label>
                <input type="number" class="form-control" id="totalInTimeHour" name="totalInTimeHour" placeholder="" value="">
                <small class="text-muted">hours</small>
              </div>
              <div class="col-md-5 mb-3">
                <label for="totalInTimeMin">&nbsp;</label>
                <input type="number" class="form-control" id="totalInTimeMin" name="totalInTimeMin" placeholder="" value="">
                <small class="text-muted">minutes</small>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <div class="row">
              <div class="col-md-7 mb-3">
                <label for="lessLunchHour">Less-Lunch: </label>
                <input type="number" class="form-control" id="lessLunchHour" name="lessLunchHour" placeholder="" value="">
                <small class="text-muted">hours</small>
              </div>
              <div class="col-md-5 mb-3">
                <label for="lessLunchMin">&nbsp;</label>
                <input type="number" class="form-control" id="lessLunchMin" name="lessLunchMin" placeholder="" value="">
                <small class="text-muted">minutes</small>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <div class="row">
              <div class="col-md-7 mb-3">
                <label for="netInTimeHour">Net Clocked-in Time: </label>
                <input type="number" class="form-control" id="netInTimeHour" name="netInTimeHour" placeholder="" value="">
                <small class="text-muted">hours</small>
              </div>
              <div class="col-md-5 mb-3">
                <label for="netalInTimeMin">&nbsp;</label>
                <input type="number" class="form-control" id="netInTimeMin" name="netInTimeMin" placeholder="" value="">
                <small class="text-muted">minutes</small>
              </div>
            </div>
          </div>

          <hr class="mb-4">
          <span class="text-info">By completing this form, the employee and supervisor agree that the any corrections above will be submitted to payroll</span>
          <span class="text-info">Note: Please round minutes to nearest quarter-hour, as 00, 15, 30, or 45</span>
          <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
        </form>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
  <script src="./assets/dist/js/bootstrap.bundle.js"></script>
  <script src="form-validation.js"></script>
  <script src="./assets/dist/js/bootstrap-datepicker.js"></script>
  <script src="./assets/dist/js/script.js"></script>
  </body>
</html>
