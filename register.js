const express = require('express');
const mysql = require('mysql2');
const bodyParser = require('body-parser');

const app = express();
const port = 3000;

// إعدادات قاعدة البيانات
const db = mysql.createConnection({
    host: 'sql12.freemysqlhosting.net',
    user: 'sql12758266',
    password: 'VquZzQV7Lj',
    database: 'registration_db.sql'
});

// استخدام body-parser لتحليل بيانات POST
app.use(bodyParser.urlencoded({ extended: true }));

// نقطة النهاية لاستلام البيانات
app.post('/register', (req, res) => {
    const { name, phone, governorate, referral_phone, age, college, university } = req.body;

    // التحقق من أن جميع الحقول تم ملؤها
    if (!name || !phone || !governorate || !referral_phone || !age || !college || !university) {
        return res.status(400).send("يرجى ملء جميع البيانات غير الضرورية.");
    }

    // حفظ البيانات في قاعدة البيانات
    const sql = "INSERT INTO المستخدمين (الاسم, الهاتف, المحافظة, هاتف الإحالة, العمر, الكلية, الجامعة) VALUES (?, ?, ?, ?, ?, ?, ?)";
    db.query(sql, [name, phone, governorate, referral_phone, age, college, university], (err, results) => {
        if (err) {
            return res.status(500).send("فشل الاتصال بقاعدة البيانات: " + err.message);
        }
        res.send("تم تسجيل البيانات الفعالة!");
    });
});

// بدء الخادم
app.listen(port, () => {
    console.log(`Server is running on http://localhost:${port}`);
});