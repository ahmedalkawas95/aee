const db = require('./db_connection'); // استدعاء ملف الاتصال بقاعدة البيانات

// مثال على البيانات المدخلة
const name = 'محمد أحمد';
const phone = '0123456789';
const governorate = 'القاهرة';
const referralPhone = '01122334455';
const age = 25;
const college = 'كلية الهندسة';
const university = 'جامعة القاهرة';

// استعلام إدخال البيانات
const sql = `INSERT INTO users (name, phone, governorate, referral_phone, age, college, university)
             VALUES (?, ?, ?, ?, ?, ?, ?)`;

db.query(sql, [name, phone, governorate, referralPhone, age, college, university], (err, result) => {
    if (err) {
        console.error('خطأ أثناء إدخال البيانات:', err.message);
        return;
    }
    console.log('تم إدخال البيانات بنجاح!', result.insertId);
});
