<div class="row">
    <form class="col-xs-10 col-xs-offset-1">
        <fieldset col-xs-12>
            <legend>Contact informations</legend>
                <label for="firstname">First name</label>
                    <input type="text" id="firstname" name="firstname" placeholder="First name" autofocus/>
                <label for="lastname">Last name</label>
                    <input type="text" id="lastname" name="lastname" placeholder="Last name"/>
                <label for="company">Company</label>
                    <input type="text" id="company" name="company" placeholder="Company / Laboratory"/>
                <label for="country">Country</label>
                    <select name="country" id="country">
                        <option selected disabled>Choose your country</option>
                    </select>
                <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" required/>
        </fieldset>
        <fieldset col-xs-12>
            <legend>Request</legend>
                <label for="laserbeam">Laser beam</label>
                    <input type="number" id="laserbeam" name="spec1" placeholder="Laser beam diameter" min="10" max="100" step="10"/>
                <label for="laserpower">Laser power</label>
                    <input type="text" id="laserpower" name="spec2" placeholder="Laser power"/>
                <label for="type1">Type 1</label>
                    <select id="type1" name="spec3">
                        <option selected disabled>Choose from list</option>
                        <option value="cw">CW</option>
                        <option value="pulsed">Pulsed</option>
                    </select>
                <label for="wavelength">Wavelength</label>
                    <input type="number" id="wavelength" name="spec4" placeholder="Wavelength" min="10" max="100" step="10"/>
                <label for="type2">Type 2</label>
                    <select id="type2" name="spec5">
                        <option selected disabled>Choose from list</option>
                        <option value="vacuum">Vacuum</option>
                        <option value="atmosphere">Atmosphere</option>
                    </select>
        </fieldset>
        <button>Send</button>
    </form>
        
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="../../../public/assets/js/apiCountryRequest.js"></script>

