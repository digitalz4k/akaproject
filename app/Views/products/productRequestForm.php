<div class="row">
    <form class="col-xs-10 col-xs-offset-1">
        <fieldset>
            <legend>Contact informations</legend>
                <input type="text" name="firstname" placeholder="First name"/>
                <input type="text" name="lastname" placeholder="Last name"/>
                <input type="text" name="company" placeholder="Company / Laboratory"/>
                <select name="country">
                    <option selected disabled>Choose your country</option>
                    <option value="france">France</option>
                    <option value="russia">Russia</option>
                    <option value="england">England</option>
                    <option value="usa">Usa</option>
                </select>
                <input type="email" name="email" placeholder="Email" required/>
        </fieldset>
        <fieldset>
            <legend>Request</legend>
                <input type="number" name="spec1" placeholder="Laser beam diameter"/>
                <input type="text" name="spec2" placeholder="Laser power"/>
                <select name="spec3">
                    <option selected disabled>Choose from list</option>
                    <option value="cw">CW</option>
                    <option value="pulsed">Pulsed</option>
                </select>
                <input type="number" name="spec4" placeholder="Wavelength"/>
                <select name="spec5">
                    <option selected disabled>Choose from list</option>
                    <option value="vacuum">Vacuum</option>
                    <option value="atmosphere">Atmosphere</option>
                </select>
        </fieldset>
        <button>Send</button>
    </form>
        
</div>
    
