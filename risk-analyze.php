<?php 
session_start();

if(!isset($_SESSION['id'])){

  header('location:login.php');

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once('page/head.php'); ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php require_once('page/header.php'); ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php require_once('page/sidebar.php'); ?>
  <!-- End Sidebar-->
    <main id="main" class="main">
      <div class="pagetitle">
        <h1>Form Layouts</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Risk Profile</li>
            <li class="breadcrumb-item active">Risk Analyze</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->
      <!-- Risk Analyze Form -->
      <section class="section">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Risk Analyze</h5>
                <form action="">
                  <label class="col-form-label" for="age">1. What is your current age?</label>
                  <fieldset class="row mb-3" id="age">
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_1"
                          id="age1"
                          value="5"
                        />
                        <input type="hidden" name="hid_quest_1_0" id="hid_quest_1_0" value="18 to 30 years old">
                        <label class="form-check-label" for="age1">
                          18 to 30 years old
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_1"
                          id="age2"
                          value="4"
                        />
                        <input type="hidden" name="hid_quest_1_1" id="hid_quest_1_1" value="31 to 40 years old">
                        <label class="form-check-label" for="age2">
                          31 to 40 years old
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_1"
                          id="age3"
                          value="3"
                        />
                        <input type="hidden" name="hid_quest_1_2" id="hid_quest_1_2" value="41 to 50 years old">
                        <label class="form-check-label" for="age3">
                          41 to 50 years old
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_1"
                          id="age4"
                          value="2"
                        />
                        <input type="hidden" name="hid_quest_1_3" id="hid_quest_1_3" value="51 to 60 years old">
                        <label class="form-check-label" for="age4">
                          51 to 60 years old
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_1"
                          id="age5"
                          value="1"
                        />
                        <input type="hidden" name="hid_quest_1_4" id="hid_quest_1_4" value="Above 60 years old">
                        <label class="form-check-label" for="age5">
                          Above 60 years old
                        </label>
                      </div>
                    </div>
                  </fieldset>
                  <label class="col-form-label" for="emergency_fund">2. How many months of expenses can your emergency funds cover?</label>
                  <fieldset class="row mb-3" id="emergency_fund">
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_2"
                          id="emergency_fund1"
                          value="5"
                        />
                        <input type="hidden" name="hid_quest_2_0" id="hid_quest_2_0" value="I currently have no emergency funds">
                        <label class="form-check-label" for="emergency_fund1">
                          I currently have no emergency funds
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_2"
                          id="emergency_fund2"
                          value="1"
                        />
                        <input type="hidden" name="hid_quest_2_1" id="hid_quest_2_1" value="Less than 3 months">
                        <label class="form-check-label" for="emergency_fund2">
                          Less than 3 months
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_2"
                          id="emergency_fund3"
                          value="2"
                        />
                        <input type="hidden" name="hid_quest_2_2" id="hid_quest_2_2" value="4 to 6 months">
                        <label class="form-check-label" for="emergency_fund3">
                          4 to 6 months
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_2"
                          id="emergency_fund4"
                          value="3"
                        />
                        <input type="hidden" name="hid_quest_2_3" id="hid_quest_2_3" value="7 to 9 months">
                        <label class="form-check-label" for="emergency_fund4">
                          7 to 9 months
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_2"
                          id="emergency_fund5"
                          value="4"
                        />
                        <input type="hidden" name="hid_quest_2_4" id="hid_quest_2_4" value="More than 9 months">
                        <label class="form-check-label" for="emergency_fund5">
                          More than 9 months
                        </label>
                      </div>
                    </div>
                  </fieldset>
                  <label class="col-form-label" for="income"
                    >3. What percentage of monthly income can be invested?</label
                  >
                  <fieldset class="row mb-3" id="income">
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_3"
                          id="income1"
                          value="2"
                        />
                        <input type="hidden" name="hid_quest_3_0" id="hid_quest_3_0" value="0 to 10%">
                        <label class="form-check-label" for="income1">
                          0 to 10%
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_3"
                          id="income2"
                          value="3"
                        />
                        <input type="hidden" name="hid_quest_3_1" id="hid_quest_3_1" value="11% to 20%">
                        <label class="form-check-label" for="income2">
                          11% to 20%
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_3"
                          id="income3"
                          value="4"
                        />
                        <input type="hidden" name="hid_quest_3_2" id="hid_quest_3_2" value="21% to 30%">
                        <label class="form-check-label" for="income3">
                          21% to 30%
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_3"
                          id="income4"
                          value="5"
                        />
                        <input type="hidden" name="hid_quest_3_3" id="hid_quest_3_3" value="More than 30%">
                        <label class="form-check-label" for="income4">
                          More than 30%
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_3"
                          id="income5"
                          value="1"
                        />
                        <input type="hidden" name="hid_quest_3_4" id="hid_quest_3_4" value="I currently have no income">
                        <label class="form-check-label" for="income5">
                          I currently have no income
                        </label>
                      </div>
                    </div>
                  </fieldset>
                  <label class="col-form-label" for="depend"
                    >4. How many people depend on you financially?</label
                  >
                  <fieldset class="row mb-3" id="depend">
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_4"
                          id="depend1"
                          value="5"
                        />
                        <input type="hidden" name="hid_quest_4_0" id="hid_quest_4_0" value="0">
                        <label class="form-check-label" for="depend1">
                          0
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_4"
                          id="depend2"
                          value="3"
                        />
                        <input type="hidden" name="hid_quest_4_1" id="hid_quest_4_1" value="1">
                        <label class="form-check-label" for="depend2">
                          1
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_4"
                          id="depend3"
                          value="4"
                        />
                        <input type="hidden" name="hid_quest_4_2" id="hid_quest_4_2" value="1,But someone who work">
                        <label class="form-check-label" for="depend3">
                          1,But someone who work
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_4"
                          id="depend4"
                          value="2"
                        />
                        <input type="hidden" name="hid_quest_4_3" id="hid_quest_4_3" value="2 to 3">
                        <label class="form-check-label" for="depend4">
                          2 to 3
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_4"
                          id="depend5"
                          value="1"
                        />
                        <input type="hidden" name="hid_quest_4_4" id="hid_quest_4_4" value="More than 3">
                        <label class="form-check-label" for="depend5">
                          More than 3
                        </label>
                      </div>
                    </div>
                  </fieldset>
                  <label class="col-form-label" for="capital_safe"
                    >5. I prefer to keep capital safe rather than have high
                    returns</label
                  >
                  <fieldset class="row mb-3" id="capital_safe">
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_5"
                          id="capital_safe1"
                          value="1"
                        />
                        <input type="hidden" name="hid_quest_5_0" id="hid_quest_5_0" value="Strongly agree">
                        <label class="form-check-label" for="capital_safe1">
                          Strongly agree
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_5"
                          id="capital_safe2"
                          value="2"
                        />
                        <input type="hidden" name="hid_quest_5_1" id="hid_quest_5_1" value="Agree">
                        <label class="form-check-label" for="capital_safe2">
                          Agree
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_5"
                          id="capital_safe3"
                          value="3"
                        />
                        <input type="hidden" name="hid_quest_5_2" id="hid_quest_5_2" value="Neutral">
                        <label class="form-check-label" for="capital_safe3">
                          Neutral
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_5"
                          id="capital_safe4"
                          value="4"
                        />
                        <input type="hidden" name="hid_quest_5_3" id="hid_quest_5_3" value="Disagree">
                        <label class="form-check-label" for="capital_safe4">
                          Disagree
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_5"
                          id="capital_safe5"
                          value="5"
                        />
                        <input type="hidden" name="hid_quest_5_4" id="hid_quest_5_4" value="Strongly disagree">
                        <label class="form-check-label" for="capital_safe5">
                          Strongly disagree
                        </label>
                      </div>
                    </div>
                  </fieldset>
                  <label class="col-form-label" for="objective"
                    >6. What is your primary investment objective?</label
                  >
                  <fieldset class="row mb-3" id="objective">
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_6"
                          id="objective1"
                          value="1"
                        />
                        <input type="hidden" name="hid_quest_6_0" id="hid_quest_6_0" value="Capital Preservation">
                        <label class="form-check-label" for="objective1">
                          Capital Preservation
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_6"
                          id="objective2"
                          value="5"
                        />
                        <input type="hidden" name="hid_quest_6_1" id="hid_quest_6_1" value="Capital Appreciation">
                        <label class="form-check-label" for="objective2">
                          Capital Appreciation
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_6"
                          id="objective3"
                          value="3"
                        />
                        <input type="hidden" name="hid_quest_6_2" id="hid_quest_6_2" value="Retirement Planning">
                        <label class="form-check-label" for="objective3">
                          Retirement Planning
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_6"
                          id="objective4"
                          value="2"
                        />
                        <input type="hidden" name="hid_quest_6_3" id="hid_quest_6_3" value="Children Education">
                        <label class="form-check-label" for="objective4">
                          Children Education
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_6"
                          id="objective5"
                          value="4"
                        />
                        <input type="hidden" name="hid_quest_6_4" id="hid_quest_6_4" value="Future Lifestyle Improvement">
                        <label class="form-check-label" for="objective5">
                          Future Lifestyle Improvement
                        </label>
                      </div>
                    </div>
                  </fieldset>
                  <label class="col-form-label" for="portfolio_falls"
                    >7. I would start to worry about my investments if my portfolio
                    value falls</label
                  >
                  <fieldset class="row mb-3" id="portfolio_falls">
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_7"
                          id="portfolio_falls1"
                          value="1"
                        />
                        <input type="hidden" name="hid_quest_7_0" id="hid_quest_7_0" value="Less than 5% per annum">
                        <label class="form-check-label" for="portfolio_falls1">
                          Less than 5% per annum
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_7"
                          id="portfolio_falls2"
                          value="2"
                        />
                        <input type="hidden" name="hid_quest_7_1" id="hid_quest_7_1" value="5%-10% per annum">
                        <label class="form-check-label" for="portfolio_falls2">
                          5%-10% per annum
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_7"
                          id="portfolio_falls3"
                          value="3"
                        />
                        <input type="hidden" name="hid_quest_7_2" id="hid_quest_7_2" value="10%-20% per annum">
                        <label class="form-check-label" for="portfolio_falls3">
                          10%-20% per annum
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_7"
                          id="portfolio_falls4"
                          value="4"
                        />
                        <input type="hidden" name="hid_quest_7_3" id="hid_quest_7_3" value="20%-30% per annum">
                        <label class="form-check-label" for="portfolio_falls4">
                          20%-30% per annum
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="quest_7"
                          id="portfolio_falls5"
                          value="5"
                        />
                        <input type="hidden" name="hid_quest_7_4" id="hid_quest_7_4" value="More than 30% per annum">
                        <label class="form-check-label" for="portfolio_falls5">
                          More than 30% per annum
                        </label>
                      </div>
                    </div>
                  </fieldset>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- End #main -->
     <!-- ======= Footer ======= -->
  <?php require_once('page/footer.php'); ?>
  <!-- End Footer -->

  <?php require_once('page/script.php'); ?>

</body>

</html>
