<script>
    $(document).ready(function() {
        console.log("Script loaded!");

        var current = 1;
        var steps = $("fieldset").length;
        var storageKey = 'registrationFormData'; // Key for localStorage

        // Function to save form data to localStorage
        function saveFormData() {
            var formData = {
                currentStep: current,
                inputs: {}
            };
            // Collect all input values
            $('input, textarea').each(function() {
                formData.inputs[$(this).attr('id')] = $(this).val();
            });
            localStorage.setItem(storageKey, JSON.stringify(formData));
        }

        // Function to restore form data from localStorage
        function restoreFormData() {
            var storedData = localStorage.getItem(storageKey);
            if (storedData) {
                try {
                    var formData = JSON.parse(storedData);
                    current = formData.currentStep || 1;
                    // Populate inputs
                    for (var id in formData.inputs) {
                        $('#' + id).val(formData.inputs[id]);
                    }
                    // Update progress bar
                    updateProgressBar(current);
                    // Position fieldsets correctly for the restored step
                    $('fieldset').each(function(index) {
                        var stepIndex = index + 1;
                        if (stepIndex < current) {
                            $(this).css({
                                'left': '-100%',
                                'z-index': 1
                            }).hide();
                        } else if (stepIndex === current) {
                            $(this).css({
                                'left': '0',
                                'z-index': 1
                            }).show();
                        } else {
                            $(this).css({
                                'left': '100%',
                                'z-index': 1
                            }).hide();
                        }
                    });
                } catch (e) {
                    console.error('Error restoring form data:', e);
                    localStorage.removeItem(storageKey); // Clear corrupted data
                }
            }
        }

        // Function to clear form data from localStorage
        function clearFormData() {
            localStorage.removeItem(storageKey);
        }

        // Restore data on page load
        restoreFormData();

        // Update on resize (for dynamic responsiveness)
        $(window).resize(function() {
            console.log("Window resized - width:", $(window).width());
        });

        // Function to update progress bar
        function updateProgressBar(step) {
            $("#progressbar li").removeClass("active");
            $("#progressbar li:nth-child(" + step + ")").addClass("active");
        }

        // Function to validate current step
        function validateStep(step) {
            var isValid = true;

            if (step === 1) {
                var name = $("#firstname").val().trim();
                if (!name) {
                    $("#firstname-error").text("Please include your first name").show();
                    isValid = false;
                } else {
                    $("#firstname-error").hide();
                }

                var email = $("#email").val().trim();
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!email || !emailRegex.test(email)) {
                    $("#email-error").text("Please enter a valid email address.").show();
                    isValid = false;
                } else {
                    $("#email-error").hide();
                }
            } else if (step === 2) {
                var phone = $("#edit-submitted-acquisition-amount-1").val().trim();
                if (!phone) {
                    $("#phone-error").text("Please enter your phone number.").show();
                    isValid = false;
                } else {
                    $("#phone-error").hide();
                }
            } else if (step === 3) {
                var password = $("#edit-submitted-cultivation-amount-1").val();
                if (!password) {
                    $("#password-error").text("Please enter a password.").show();
                    isValid = false;
                } else if (password.length < 8) {
                    $("#password-error").text("Password must be at least 8 characters long.").show();
                    isValid = false;
                } else {
                    $("#password-error").hide();
                }

                var confirmPassword = $("#edit-submitted-cultivation-amount-2").val();
                if (!confirmPassword) {
                    $("#confirm-password-error").text("Please confirm your password.").show();
                    isValid = false;
                } else if (password !== confirmPassword) {
                    $("#confirm-password-error").text("Passwords do not match.").show();
                    isValid = false;
                } else {
                    $("#confirm-password-error").hide();
                }
            } else if (step === 4) {
                var facebook = $("#edit-submitted-cultivation-amount-3").val().trim();
                if (!facebook) {
                    $("#facebook-error").text("Please enter your Facebook profile URL.").show();
                    isValid = false;
                } else {
                    $("#facebook-error").hide();
                }

                var linkedin = $("#edit-submitted-cultivation-amount-4").val().trim();
                if (!linkedin) {
                    $("#linkedin-error").text("Please enter your LinkedIn profile URL.").show();
                    isValid = false;
                } else {
                    $("#linkedin-error").hide();
                }
            }

            return isValid;
        }

        // Next button click
        $(".next").click(function() {
            if (validateStep(current)) {
                var current_fs = $(this).parent();
                var next_fs = current_fs.next();

                // Sliding for all devices (faster: 400ms)
                next_fs.css({
                    'z-index': 10,
                    left: '100%'
                }).show();
                current_fs.css({
                    'z-index': 5
                });

                current_fs.animate({
                    left: '-100%'
                }, 400, function() {
                    current_fs.hide().css({
                        left: '0',
                        'z-index': 1
                    });
                    current++;
                    updateProgressBar(current);
                    saveFormData(); // Save after step change
                });
                next_fs.animate({
                    left: '0'
                }, 400, function() {
                    next_fs.css({
                        'z-index': 1
                    });
                });
            }
        });

        // Previous button click
        $(".previous").click(function() {
            var current_fs = $(this).parent();
            var previous_fs = current_fs.prev();

            // Sliding for all devices (faster: 400ms)
            previous_fs.css({
                'z-index': 10,
                left: '-100%'
            }).show();
            current_fs.css({
                'z-index': 5
            });

            current_fs.animate({
                left: '100%'
            }, 400, function() {
                current_fs.hide().css({
                    left: '0',
                    'z-index': 1
                });
                current--;
                updateProgressBar(current);
                saveFormData(); // Save after step change
            });
            previous_fs.animate({
                left: '0'
            }, 400, function() {
                previous_fs.css({
                    'z-index': 1
                });
            });
        });

        // Submit button click (opens OTP modal)
        $(".submit").click(function() {
            console.log("Submit button clicked!");
            console.log("Current step:", current);
            if (validateStep(current)) {
                console.log("Validation passed, opening modal.");
                $('#otp-modal').addClass('modal-show');
                $('#otp-method').addClass('active'); // Show first step
                saveFormData(); // Save before modal opens
            } else {
                console.log("Validation failed.");
            }
        });

        // Save data on input change (for real-time persistence)
        $('input, textarea').on('input', function() {
            saveFormData();
        });

        // Password toggle functionality
        $('.toggle-password').on('click', function() {
            const targetId = $(this).data('target');
            const input = $('#' + targetId);
            const icon = $(this).find('i');

            if (input.attr('type') === 'password') {
                input.attr('type', 'text');
                icon.removeClass('fa-eye').addClass('fa-eye-slash');
            } else {
                input.attr('type', 'password');
                icon.removeClass('fa-eye-slash').addClass('fa-eye');
            }
        });

        // OTP method selection
        $('.otp-option').on('click', function() {
            const method = $(this).data('method');
            $('#selected-method').text(method.charAt(0).toUpperCase() + method.slice(1)); // Capitalize

            // Animate to OTP input
            $('#otp-method').removeClass('active');
            setTimeout(() => {
                $('#otp-input').addClass('active');
            }, 250); // Delay for smooth transition
        });

        // Back button
        $('.otp-back-btn').on('click', function() {
            $('#otp-input').removeClass('active');
            setTimeout(() => {
                $('#otp-method').addClass('active');
            }, 250);
        });
        // OTP form submission (reinforced validation)
        $('#otp-form').on('submit', function(e) {
            e.preventDefault(); // Always prevent default submission
            const otp = $('#otp-code').val().trim(); // Trim whitespace
            if (!otp) {
                alert('Please enter the OTP.');
                $('#otp-code').focus(); // Focus on the input
                return false;
            }
            if (otp.length !== 6 || !/^\d+$/.test(otp)) {
                iziToast.error({
                    message: 'Please enter 6-digit OTP!',
                    position: 'topRight'
                });
                $('#otp-code').focus();
                return false;
            }
            // OTP valid: Submit the registration form
            $('#registration-form').submit(); // Assumes your multi-step form has id="registration-form"
            // Fortify will handle registration and redirection
        });

        // Additional button click handler for "Verify OTP" (extra prevention)
        $('.otp-submit-btn').on('click', function(e) {
            const otp = $('#otp-code').val().trim();
            if (!otp || otp.length !== 6 || !/^\d+$/.test(otp)) {
                e.preventDefault(); // Prevent form submission
                iziToast.error({
                    message: 'Please enter 6-digit OTP!',
                    position: 'topRight'
                });
                $('#otp-code').focus();
                return false;
            }
            // If valid, allow form submission to proceed
        });

        // Close modal on overlay click or Escape
        $('body').on('click', '.modal-overlay, .modal-close', function() {
            $('.modal').removeClass('modal-show');
            $('.modal-step').removeClass('active'); // Reset steps
        });

        $(document).on('keydown', function(e) {
            if (e.key === 'Escape') {
                $('.modal').removeClass('modal-show');
                $('.modal-step').removeClass('active');
            }
        });
    });

    // Modal module (for other modals, if needed)
    var modules = {
        $window: $(window),
        $html: $('html'),
        $body: $('body'),

        init: function() {
            this.modals.init();
        },

        modals: {
            trigger: $('.explanation'),
            modal: $('.modal'),
            scrollTopPosition: 0,

            init: function() {
                if (this.trigger.length && this.modal.length) {
                    $('body').append('<div class="modal-overlay"></div>');
                    this.bindEvents();
                }
            },

            bindEvents: function() {
                var self = this;

                self.trigger.on('click', function(e) {
                    e.preventDefault();
                    self.openModal($(this).data('modalId'));
                });

                $('body').on('click', '.modal-overlay, .modal-close', function() {
                    self.closeModal();
                });

                $(document).on('keydown', function(e) {
                    if (e.key === "Escape") self.closeModal();
                });
            },

            openModal: function(id) {
                this.scrollTopPosition = $(window).scrollTop();
                $('html').addClass('modal-show');
                $('#' + id).addClass('modal-show');
            },

            closeModal: function() {
                $('.modal-show').removeClass('modal-show');
                $('html').removeClass('modal-show');
                $(window).scrollTop(this.scrollTopPosition);
            }
        }
    };

    modules.init();
</script>
