const contactForm = document.querySelector('[data-contact-form]');

if (contactForm) {
    const fields = Array.from(contactForm.querySelectorAll('[data-validate]'));
    const formStatus = contactForm.querySelector('[data-form-status]');

    function validateField(field) {
        const error = contactForm.querySelector(`[data-error-for="${field.id}"]`);
        let message = '';

        if (field.validity.valueMissing) {
            message = 'Please complete this field.';
        } else if (field.validity.typeMismatch && field.type === 'email') {
            message = 'Enter a valid email address.';
        } else if (field.validity.tooShort) {
            message = `Please enter at least ${field.minLength} characters.`;
        }

        field.setAttribute('aria-invalid', String(Boolean(message)));
        error.textContent = message;

        return message === '';
    }

    fields.forEach((field) => {
        field.addEventListener('input', () => validateField(field));
        field.addEventListener('change', () => validateField(field));
    });

    contactForm.addEventListener('submit', (event) => {
        event.preventDefault();

        const invalidFields = fields.filter((field) => !validateField(field));

        if (invalidFields.length > 0) {
            formStatus.textContent = 'Please review the highlighted fields.';
            formStatus.hidden = false;
            invalidFields[0].focus();
            return;
        }

        formStatus.textContent = 'Your entries pass validation, but this class-project demo does not send or store messages.';
        formStatus.hidden = false;
    });
}