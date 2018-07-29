<?php include('controllers/HomeController.php'); ?>
<?php var_dump($home); ?>
<div class="row">
  <div class="col s12">
    <a class="waves-effect waves-light btn">Nyt attack</a>
  </div>
</div>
<div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <span class="card-title">Din hovedpinekalender</span>
          <div class="row">
            <div class="col s12">
              <ul class="tabs">
                <li class="tab col s1"><a class="active" href="#januar">Jan</a></li>
                <li class="tab col s1"><a href="#februar">Feb</a></li>
                <li class="tab col s1"><a href="#marts">Mar</a></li>
                <li class="tab col s1"><a href="#april">Apr</a></li>
                <li class="tab col s1"><a href="#maj">Maj</a></li>
                <li class="tab col s1"><a href="#juni">Jun</a></li>
                <li class="tab col s1"><a href="#juli">Jul</a></li>
                <li class="tab col s1"><a href="#august">Aug</a></li>
                <li class="tab col s1"><a href="#september">Sep</a></li>
                <li class="tab col s1"><a href="#oktober">Okt</a></li>
                <li class="tab col s1"><a href="#november">Nov</a></li>
                <li class="tab col s1"><a href="#december">Dec</a></li>
              </ul>
            </div>
            <div id="januar" class="col s12">
              <table>
                <thead>
                  <tr>
                      <th>Dato</th>
                      <th>Start</th>
                      <th>Slut</th>
                      <th>Styrke</th>
                      <th>Medicin</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div id="februar" class="col s12">Test 2</div>
            <div id="marts" class="col s12">Test 3</div>
            <div id="april" class="col s12">Test 4</div>
            <div id="maj" class="col s12">Test 4</div>
            <div id="juni" class="col s12">Test 4</div>
            <div id="juli" class="col s12">Test 4</div>
            <div id="august" class="col s12">Test 4</div>
            <div id="september" class="col s12">Test 4</div>
            <div id="oktober" class="col s12">Test 4</div>
            <div id="november" class="col s12">Test 4</div>
            <div id="december" class="col s12">Test 4</div>
          </div>
        </div>
      </div>
    </div>
  </div>
