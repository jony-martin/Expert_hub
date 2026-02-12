<script>
    $(document).ready(function() {
        console.log("Script loaded!");

        var current = 1;
        var steps = $("fieldset").length;

        // Update on resize (for dynamic responsiveness)
        $(window).resize(function() {
            console.log("Window resized - width:", $(window).width());
        });

        // Hide all fieldsets except the first
        $("fieldset:not(:first)").hide();

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
            if (validateStep(current)) {
                console.log("Validation passed, opening modal.");
                $('#otp-modal').addClass('modal-show');
                $('#otp-method').addClass('active'); // Show first step
            } else {
                console.log("Validation failed.");
            }
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

        // OTP form submission
        $('#otp-form').on('submit', function(e) {
            e.preventDefault();
            const otp = $('#otp-code').val();
            if (otp.length === 6 && /^\d+$/.test(otp)) {
                alert('OTP Verified! Form submitted successfully.');
                $('#otp-modal').removeClass('modal-show');
                // Here, you can add actual submission logic (e.g., AJAX)
            } else {
                alert('Please enter a valid 6-digit OTP.');
            }
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
