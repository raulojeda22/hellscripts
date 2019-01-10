<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
<script src="<? echo _PROJECT_URL_; ?>/js/datePicker.js"></script>
<div class="container">
    <form action="#" method="post" class="probootstrap-form mb60">
        <div class="form-group">
            <label for="fname">Name</label>
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
                Public <input name="privacy" type="radio" value="public" checked>
                Protected <input name="privacy" type="radio" value="protected">
                Private <input name="privacy" type="radio" value="private">
            </div>
        </div>
        <div class="form-group">
            <h3>Programming languages:</h3> <h4 class="text-muted">(Separate them in commas)</h4>
            <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
        </div>
        <div class="form-group">
            <input name="endDate" type="text" class="datePicker">
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-primary" id="submit" name="submit">Create</button>
        </div>
    </form>
</div>