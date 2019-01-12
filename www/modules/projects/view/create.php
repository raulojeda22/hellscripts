<div class="container">
    <form action="#" method="post" class="probootstrap-form mb60">
        <div class="form-group">
            <label for="fname">Name*</label>
            <input type="text" class="form-control" id="fname" name="fname">
        </div>
        <div class="form-group">
            <label for="message">Description</label>
            <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
        </div>
        <div class="form-group">
            <label for="email">Website</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3>License</h3>
                <select class="form-control" name="license" id="license">
                    <option value="Apache">Apache License 2.0</option>
                    <option value="GNU">GNU General Public License</option>
                    <option value="MIT">MIT license</option>
                    <option value="CDDL">Common Development and Distribution License</option>
                </select>
            </div>
            <div class="col-md-6">
                <h3>Privacy</h3>
                <div class="toggle_radio">
                    <input type="radio" checked class="toggle_option" id="first_toggle" name="toggle_option">
                    <input type="radio" class="toggle_option" id="second_toggle" name="toggle_option">
                    <input type="radio" class="toggle_option" id="third_toggle" name="toggle_option">
                    <label for="first_toggle"><p>Public</p></label>
                    <label for="second_toggle"><p>Protected</p></label>
                    <label for="third_toggle"><p>Private</p></label>
                <div class="toggle_option_slider"></div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <h3>Programming languages:</h3> <h4 class="text-muted">(Separate them in commas)</h4>
            <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
        </div>
        <div class="form-group"> <!-- Date input -->
            <label class="control-label" for="date">Expected end date</label>
            <input class="form-control datePicker" id="date" name="date" placeholder="DD/MM/YYY" type="text"/>
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-primary" id="submit" name="submit">Create</button>
        </div>
    </form>
</div>