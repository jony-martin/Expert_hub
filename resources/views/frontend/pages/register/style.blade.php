<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        height: 100%;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    }

    body {
        font-family: 'Roboto', sans-serif;
        width: 100%;
        overflow-x: hidden;
        color: #495057;
    }

    /* form styles */
    .steps {
        width: 700px;
        margin: 0 auto;
        /* Removed top margin to eliminate gap */
        position: relative;
        overflow: hidden;
        height: 550px;
        background: #ffffff;
        border-radius: 0 0 12px 12px;
        /* Removed top border-radius for seamless connection */
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        margin-bottom: 40px;
        padding-bottom: 15px;
    }

    .steps fieldset {
        background: transparent;
        border: none;
        border-radius: 12px;
        padding: 30px 40px;
        padding-top: 100px;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        position: absolute;
        top: 0;
        left: 0;
        opacity: 1;
        display: block;
        z-index: 1;
    }

    .steps fieldset:not(:first-of-type) {
        display: none;
    }

    /* inputs */
    .steps label {
        color: #495057;
        font-size: 16px;
        font-weight: 500;
        margin-bottom: 8px;
        display: block;
    }

    .steps .hs-form-field {
        display: flex;
        flex-direction: column;
        /* Stacks input and error vertically */
        margin-bottom: 10px;
        /* Added 10px gap between fields */
    }

    .steps input,
    .steps textarea {
        outline: none;
        display: block;
        width: 100%;
        margin: 0;
        padding: 14px 18px;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        color: #495057;
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
        font-weight: 400;
        transition: all 0.3s ease;
        background: #f8f9fa;
    }

    .steps input:focus,
    .steps textarea:focus {
        color: #495057;
        border: 2px solid #3474D4;
        background: #ffffff;
        box-shadow: 0 0 8px rgba(115, 103, 240, 0.2);
    }

    /* error styling */
    .error1 {
        color: #3474D4;
        font-size: 14px;
        font-weight: 400;
        margin-top: 8px;
        /* Small gap above the error */
        margin-bottom: 16px;
        /* Gap below the error message */
        display: none;
    }

    /* buttons */
    .steps .action-button,
    .action-button {
        width: 120px;
        background: linear-gradient(135deg, #3474D4 0%, #5a4fcf 100%);
        font-weight: 500;
        color: white;
        border: none;
        border-radius: 25px;
        cursor: pointer;
        padding: 12px 20px;
        margin: 15px 10px;
        transition: all 0.3s ease;
        display: inline-block;
        font-size: 16px;
        box-shadow: 0 4px 12px rgba(115, 103, 240, 0.3);
    }

    .steps .next,
    .steps .submit {
        float: right;
    }

    .steps .previous {
        float: left;
    }

    .action-button:hover,
    .action-button:focus {
        background: linear-gradient(135deg, #5a4fcf 0%, #4c3ec9 100%);
        box-shadow: 0 6px 16px rgba(115, 103, 240, 0.4);
        transform: translateY(-2px);
    }

    .action-button i {
        margin-right: 8px;
    }

    /* explanation bar */
    .steps .explanation {
        display: block;
        clear: both;
        width: 100%;
        background: #f8f9fa;
        position: relative;
        padding: 20px 0;
        margin-bottom: -10px;
        border-bottom-left-radius: 12px;
        border-bottom-right-radius: 12px;
        text-align: center;
        color: #6c757d;
        font-size: 14px;
        font-weight: 400;
        cursor: pointer;
        border-top: 1px solid #dee2e6;
    }

    /* headings */
    .fs-title {
        font-size: 24px;
        font-weight: 700;
        color: #3474D4;
        margin-bottom: 10px;
        text-align: center;
        text-transform: none;
    }

    .fs-subtitle {
        font-weight: 400;
        font-size: 16px;
        color: #6c757d;
        margin-bottom: 30px;
        text-align: center;
        line-height: 1.5;
    }

    /* progressbar */
    #progressbar {
        margin-bottom: 0;
        overflow: hidden;
        counter-reset: step;
        width: 100%;
        text-align: center;
        padding: 20px 0;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 2;
    }

    #progressbar li {
        list-style-type: none;
        color: #6c757d;
        font-size: 12px;
        width: 25%;
        float: left;
        position: relative;
        font-weight: 500;
    }

    #progressbar li:before {
        content: counter(step);
        counter-increment: step;
        width: 30px;
        height: 30px;
        line-height: 30px;
        display: block;
        font-size: 14px;
        color: #ffffff;
        background: #dee2e6;
        border-radius: 50%;
        margin: 0 auto 8px auto;
        transition: all 0.3s ease;
    }

    #progressbar li.completed:before {
        background: #28a745;
        /* Green for completed */
        content: '\f00c';
        /* Checkmark */
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
    }

    #progressbar li.active:before {
        background: #3474D4;
        /* Blue for active */
        content: counter(step);
        /* Number for current step */
        font-family: 'Roboto', sans-serif;
        font-weight: 500;
    }

    #progressbar li:after {
        content: '';
        width: 100%;
        height: 3px;
        background: #dee2e6;
        position: absolute;
        left: -50%;
        top: 12px;
        z-index: -1;
        transition: all 0.3s ease;
    }

    #progressbar li:first-child:after {
        content: none;
    }

    #progressbar li.completed:after,
    #progressbar li.active:after {
        background: #3474D4;
    }

    /* modal */
    .modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 2000;
        visibility: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        /* Centers the modal content in the middle of the window */
    }

    .modal-show {
        visibility: visible;
    }

    .modal-content {
        background: #d7d7d7;
        padding: 40px;
        border-radius: 12px;
        max-width: 600px;
        width: 50%;
        min-width: 320px;
        /* Ensures the content is centered and responsive */
    }

    /* Modal steps for nested flow */
    .modal-step {
        display: none;
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.5s ease;
    }

    .modal-step.active {
        display: block;
        opacity: 1;
        transform: translateY(0);
    }

    .modal-step h3 {
        color: #3474D4;
        font-size: 20px;
        margin-bottom: 20px;
        text-align: center;
    }

    .otp-options {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .otp-option {
        background: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        padding: 15px;
        font-size: 16px;
        color: #495057;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .otp-option:hover {
        background: #3474D4;
        color: #ffffff;
        border-color: #3474D4;
    }

    .otp-option i {
        font-size: 20px;
    }

    .otp-input-container {
        text-align: center;
        margin-bottom: 20px;
    }

    #otp-code {
        width: 200px;
        padding: 10px;
        font-size: 18px;
        text-align: center;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        letter-spacing: 5px;
    }

    .otp-submit-btn,
    .otp-back-btn {
        background: linear-gradient(135deg, #3474D4 0%, #5a4fcf 100%);
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 25px;
        cursor: pointer;
        font-size: 16px;
        margin: 5px;
        transition: all 0.3s ease;
    }

    .otp-submit-btn:hover,
    .otp-back-btn:hover {
        background: linear-gradient(135deg, #5a4fcf 0%, #4c3ec9 100%);
    }

    .otp-back-btn {
        background: #6c757d;
    }

    .otp-back-btn:hover {
        background: #5a6268;
    }

    /* Password container for eye button */
    .password-container {
        position: relative;
        display: flex;
        align-items: center;
    }

    .password-container input {
        flex: 1;
        padding-right: 50px;
        /* Space for the button */
    }

    .toggle-password {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        color: #6c757d;
        font-size: 18px;
        cursor: pointer;
        padding: 5px;
        border-radius: 50%;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .toggle-password:hover {
        color: #3474D4;
        background: rgba(115, 103, 240, 0.1);
    }

    .toggle-password:focus {
        outline: 2px solid #3474D4;
        outline-offset: 2px;
    }

    /* info box */
    .info {
        width: 700px;
        margin: 40px auto 0;
        text-align: center;
        font-family: 'Roboto', sans-serif;
    }

    /* Registration Form Header */
    .info {
        background: linear-gradient(135deg, #3474D4 0%, #5a4fcf 100%);
        padding: 30px 20px;
        border-radius: 12px 12px 0 0;
        box-shadow: 0 4px 20px rgba(115, 103, 240, 0.3);
        margin-bottom: 0;
        text-align: center;
        color: #ffffff;
        animation: fadeInSlideDown 1s ease-out;
    }

    .info h1 {
        font-size: 25px;
        font-weight: 700;
        color: #ffffff;
        text-transform: none;
        letter-spacing: 2px;
        margin: 0;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        opacity: 0;
        animation: fadeInText 0.8s ease-out 0.2s forwards;
    }

    /* Keyframes for header animation */
    @keyframes fadeInSlideDown {
        0% {
            opacity: 0;
            transform: translateY(-20px);
            /* Start slightly above */
        }

        100% {
            opacity: 1;
            transform: translateY(0);
            /* End at normal position */
        }
    }

    @keyframes fadeInText {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    /* responsive */
    @media (max-width: 1000px) {
        .error1 {
            font-size: 13px;
        }
    }

    @media (max-width: 675px) {
        .steps {
            width: 95%;
            margin: 0 auto;
            /* Removed top margin on mobile too */
            height: auto;
            min-height: 700px;
            padding: 20px;
            margin-bottom: 40px;
        }

        .steps fieldset {
            padding: 20px;
            padding-top: 120px;
            position: absolute;
        }

        .steps .action-button,
        .action-button {
            width: 48%;
            float: none;
            margin: 10px 1%;
            padding: 14px 10px;
            font-size: 16px;
            display: inline-block;
        }

        .steps .next,
        .steps .submit {
            float: right;
        }

        .steps .previous {
            float: left;
        }

        .steps .submit:only-child {
            width: 100%;
            float: none;
            margin: 20px 0;
        }

        .steps .explanation {
            padding: 15px 0;
        }

        #progressbar {
            display: block;
            padding: 15px 0;
            position: absolute;
            top: 20px;
            left: 20px;
            /* Adjusted for form padding */
            width: calc(100% - 40px);
            /* Full width minus padding */
            z-index: 2;
        }

        #progressbar li {
            width: 25%;
            font-size: 10px;
        }

        #progressbar li:before {
            width: 25px;
            height: 25px;
            line-height: 25px;
            font-size: 12px;
            margin: 0 auto 5px auto;
        }

        #progressbar li:after {
            top: 10px;
        }

        .error1 {
            position: static;
            margin-top: 5px;
            margin-bottom: 15px;
        }

        .fs-title {
            font-size: 25px;
        }

        .fs-subtitle {
            font-size: 14px;
        }

        .info {
            width: 95%;
            padding: 20px 15px;
            /* Reduced padding on mobile */
            border-radius: 8px 8px 0 0;
            /* Smaller radius */
            animation: fadeInSlideDown 0.8s ease-out;
            /* Faster animation on mobile */
        }

        .info h1 {
            font-size: 24px;
            /* Smaller font on mobile */
            letter-spacing: 1px;
            /* Reduced spacing */
            animation: fadeInText 1s ease-out 0.2s forwards;
            /* Adjusted delay */
        }

        /* Responsive modal */
        .modal {
            width: 100%;
            height: 100%;
            /* Full screen on mobile */
        }

        .modal-content {
            padding: 20px;
            width: 90%;
            min-width: 280px;
            /* Adjusted for mobile */
        }

        .modal-step h3 {
            font-size: 18px;
            /* Smaller title */
            margin-bottom: 15px;
        }

        .otp-options {
            gap: 10px;
            /* Smaller gap */
        }

        .otp-option {
            padding: 12px;
            /* Smaller padding */
            font-size: 14px;
            /* Smaller font */
        }

        .otp-option i {
            font-size: 18px;
            /* Smaller icon */
        }

        #otp-code {
            width: 150px;
            /* Smaller input */
            font-size: 16px;
            /* Smaller font */
            letter-spacing: 3px;
            /* Adjusted spacing */
        }

        .otp-submit-btn,
        .otp-back-btn {
            padding: 8px 16px;
            /* Smaller buttons */
            font-size: 14px;
            /* Smaller font */
            margin: 3px;
            /* Smaller margin */
        }
    }

    .button-group {
        display: flex;
        justify-content: space-between;
        width: 100%;
        margin-top: 20px;
    }

    .button-group .action-button {
        flex: 0 0 auto;
    }
</style>
