
## emailcheck-fts

It checks whether the entered email exists or not, the system sends a temporary message to the email and checks if the message has arrived, if so, it will return a "true" message.

You can try with "gmail" and other platforms
## Installation

Recommended way of installing this is via [Composer](https://getcomposer.org/):

```bash
  composer require yandricr/emailcheck-fts
```
## Usage/Examples
```javascript
include "./vendor/autoload.php";

use EmailCheck\Email\Email;

$mail = new Email();
$Check = $mail->verify("sufukape@finews.biz");
print($Check);
```

JSON
```json
{
    "message": true,
    "email": "sufukape@finews.biz",
    "description": "the email entered exists"
}
```

![mail](https://i.postimg.cc/MGb4fRZH/mail.png)
## API
Use the emailcheck api by [clicking here](https://emailcheck.projectsrpp.repl.co/)

Developed by yandricr