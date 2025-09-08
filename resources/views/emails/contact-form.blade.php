<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #1e40af;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 0 0 8px 8px;
        }
        .field {
            margin-bottom: 15px;
            padding: 10px;
            background-color: white;
            border-radius: 5px;
            border-left: 4px solid #10b981;
        }
        .field-label {
            font-weight: bold;
            color: #1e40af;
            margin-bottom: 5px;
        }
        .field-value {
            color: #555;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            padding: 15px;
            background-color: #e5e7eb;
            border-radius: 5px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>New Contact Form Submission</h1>
        <p>LiftUp Tanzania Limited</p>
    </div>
    
    <div class="content">
        <p>You have received a new contact form submission from your website:</p>
        
        <div class="field">
            <div class="field-label">Full Name:</div>
            <div class="field-value">{{ $data['name'] }}</div>
        </div>
        
        <div class="field">
            <div class="field-label">Email Address:</div>
            <div class="field-value">{{ $data['email'] }}</div>
        </div>
        
        <div class="field">
            <div class="field-label">Phone Number:</div>
            <div class="field-value">{{ $data['phone'] }}</div>
        </div>
        
        <div class="field">
            <div class="field-label">Company Name:</div>
            <div class="field-value">{{ $data['company'] ?? 'Not provided' }}</div>
        </div>
        
        <div class="field">
            <div class="field-label">Service Requested:</div>
            <div class="field-value">{{ $data['service'] }}</div>
        </div>
        
        <div class="field">
            <div class="field-label">Project Details:</div>
            <div class="field-value">{{ $data['message'] }}</div>
        </div>
    </div>
    
    <div class="footer">
        <p>This email was sent from the contact form on your LiftUp Tanzania website.</p>
        <p>Please respond to the customer at: {{ $data['email'] }}</p>
    </div>
</body>
</html>