const db = require('./db_connection'); // استدعاء ملف الاتصال بقاعدة البيانات

// استعلام جلب البيانات
const sql = 'SELECT * FROM users';

db.query(sql, (err, results) => {
    if (err) {
        console.error('خطأ أثناء جلب البيانات:', err.message);
        return;
    }

    console.log('البيانات المدخلة:');
    console.table(results); // عرض البيانات في جدول داخل Terminal
});
