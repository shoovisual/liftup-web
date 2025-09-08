# Email Configuration Setup for Contact Form

The contact form has been implemented with email functionality. Follow these steps to configure email sending:

## 1. Gmail SMTP Configuration

To send emails through Gmail, you need to:

### Step 1: Enable 2-Factor Authentication
1. Go to your Google Account settings
2. Navigate to Security
3. Enable 2-Factor Authentication if not already enabled

### Step 2: Generate App Password
1. In Google Account Security settings
2. Go to "App passwords"
3. Generate a new app password for "Mail"
4. Copy the 16-character password

### Step 3: Update .env File
Replace the placeholder values in your `.env` file:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your_actual_email@gmail.com
MAIL_PASSWORD=your_16_character_app_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="noreply@liftup.co.tz"
MAIL_FROM_NAME="LiftUp Tanzania"
```

**Important:** 
- Replace `your_actual_email@gmail.com` with your Gmail address
- Replace `your_16_character_app_password` with the app password from Step 2
- Never commit your actual credentials to version control

## 2. Alternative Email Providers

### Using Other SMTP Services
You can also use other email services like:

- **Mailgun**: Professional email service
- **SendGrid**: Reliable email delivery
- **Amazon SES**: Cost-effective for high volume

Update the SMTP settings accordingly in your `.env` file.

## 3. Testing the Contact Form

### Local Testing
For local development, you can use:

```env
MAIL_MAILER=log
```

This will log emails to `storage/logs/laravel.log` instead of sending them.

### Production Testing
1. Fill out the contact form on your website
2. Check that emails are received at `shoovisual@gmail.com`
3. Verify the email formatting and content

## 4. Form Data Collected

The contact form collects:
- **Name** (required)
- **Email** (required)
- **Phone** (required)
- **Company** (optional)
- **Service** (required)
- **Message** (required)

## 5. Security Features

- CSRF protection enabled
- Input validation and sanitization
- Error handling with user-friendly messages
- Email logging for debugging

## 6. Troubleshooting

### Common Issues:

1. **"Authentication failed"**
   - Verify Gmail credentials
   - Ensure app password is correct
   - Check 2FA is enabled

2. **"Connection timeout"**
   - Check firewall settings
   - Verify SMTP port (587) is open
   - Try port 465 with SSL

3. **"Mail not received"**
   - Check spam folder
   - Verify recipient email address
   - Check email logs in `storage/logs/`

### Debug Mode
Enable debug mode in `.env` for detailed error messages:
```env
APP_DEBUG=true
LOG_LEVEL=debug
```

## 7. Production Considerations

- Set `APP_DEBUG=false` in production
- Use environment-specific `.env` files
- Consider using a dedicated email service for reliability
- Monitor email delivery rates
- Set up email bounce handling

---

**Note:** After updating `.env`, always run:
```bash
php artisan config:clear
```

This ensures Laravel uses the updated configuration.