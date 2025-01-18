const mysql = require('mysql');

// إعداد معلومات الاتصال بقاعدة البيانات
const db = mysql.createConnection({
    host: 'https://www.phpmyadmin.co/', // استبدل بـ Host الخاص بك (مثل localhost أو sql123.example.com)
    user: 'sql12758266', // اسم المستخدم لقاعدة البيانات
    password: 'VquZzQV7Lj', // كلمة المرور لقاعدة البيانات
    database: 'registration_db.sql' // اسم قاعدة البيانات
});

// محاولة الاتصال بقاعدة البيانات
db.connect((err) => {
    if (err) {
        console.error('خطأ في الاتصال بقاعدة البيانات:', err.message);
        return;
    }
    console.log('تم الاتصال بقاعدة البيانات بنجاح!');
});

module.exports = db; // تصدير الاتصال للاستخدام في ملفات أخرى
