<form action="form.php" method="POST" class="contact__form">
    <div class="name">
        <label for="name">Name <span class="required">*</span></label>
        <br>
        <input type="text" name="name" required>
    </div>
    <div class="email">
        <label for="email">Email <span class="required">*</span></label>
        <br>
        <input type="email" name="email" required>
    </div>
    <div class="textarea">
        <label for="description">Tell me a bit about your project <span class="required">*</span></label>
        <br>
        <textarea name="description" required></textarea>
    </div>
    <div class="hear">
        <label for="hear">How did you hear about me?</label>
        <br>
        <input type="text" name="hear">
    </div>
    <div class="btn">
        <button type="submit" value="submit" id="submit" name="SubmitButton" class="btn__active submit__btn">
            <a class="fonH4">
                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M16.3825 3.88326H0V0H20.2658V20.2658H16.3825V3.88326Z" fill="" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M-0.000202745 16.3926C7.15253 16.3926 12.951 10.5941 12.951 3.44141L16.8242 3.44141C16.8242 12.7333 9.29167 20.2658 -0.000202914 20.2658L-0.000202745 16.3926Z"
                        fill="" />
                </svg>
                Send
            </a>
        </button>
    </div>
</form>

