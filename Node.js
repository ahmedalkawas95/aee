const express = require('github');
const bodyParser = require('body-parser');
const db = require('./db_connection');

const app = express();
app.use(bodyParser.urlencoded({ extended: true }));

// معالجة طلب POST من النموذج
app.post('/register', (req, res) => {
    const { name, phone, governorate, referralPhone, age, college, university } = req.body;

    const sql = `INSERT INTO users (name, phone, governorate, referral_phone, age, college, university)
                 VALUES (?, ?, ?, ?, ?, ?, ?)`;

    db.query(sql, [name, phone, governorate, referralPhone, age, college, university], (err, result) => {
        if (err) {
            console.error('خطأ أثناء إدخال البيانات:', err.message);
            res.status(500).send('فشل في إدخال البيانات');
            return;
        }
        res.send('تم إدخال البيانات بنجاح!');
    });
});

// تشغيل السيرفر
app.listen(3000, () => {
    console.log('السيرفر يعمل على http://localhost:3000');
});
