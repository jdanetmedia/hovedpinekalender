<?php include('controllers/AddController.php'); ?>
<div class="row">
  <form class="signin card col s12 m6 offset-m3" method="post">
    <div class="card-content">
      <div class="card-title">Log ind på din konto</div>
      <div class="input-field col s12">
        <input id="date" type="text" name="attack_date" class="datepicker validate" required>
        <label for="date">Dato</label>
      </div>
      <div class="input-field col s6">
        <input id="startTime" type="text" name="attack_start" class="timepicker validate" required>
        <label for="startTime">Start tid</label>
      </div>
      <div class="input-field col s6">
        <input id="endTime" type="text" name="attack_end" class="timepicker validate">
        <label for="endTime">Slut tid</label>
      </div>
      <div class="input-field col s6">
        <select name="attack_strength">
          <option value="" disabled selected>Vælg styrke</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
        </select>
        <label>Styrke</label>
      </div>
      <div class="input-field col s6">
        <select name="attack_side">
          <option value="" disabled selected>Vælg side</option>
          <option value="right">Højre</option>
          <option value="left">Venstre</option>
        </select>
        <label>Side</label>
      </div>
      <div class="input-field col s12">
        <select name="attack_medication" multiple>
          <option value="" disabled>Vælg medicin</option>
          <option value="oxygen">Ilt</option>
          <option value="imigran-nose">Imigran næsespray</option>
          <option value="imigran-inj">Imigran injektion</option>
          <option value="treo">Treo</option>
          <option value="energy">Red Bull</option>
        </select>
        <label>Medicin</label>
      </div>
      <input type="hidden" name="user_id" value="1">
      <div class="col s12 ">
        <button class="btn waves-effect waves-light" type="submit" name="addAttack">Gem</button>
      </div>
    </div>
  </form>
</div>
