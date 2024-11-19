### Repo Adı Önerisi
**PHP Opcache Performance Test**  
Açıklayıcı ve net bir isim, repoyu inceleyen kişilere içeriği hakkında hemen bilgi verir.

---

### `README.md` İçeriği

```markdown
# PHP Opcache Performance Test

Bu proje, **PHP OPcache** özelliğini test etmek ve performans üzerindeki etkisini ölçmek için oluşturulmuş basit bir örnek uygulamadır.

## 🛠️ Proje Hakkında
PHP OPcache, PHP dosyalarının derlenmiş bytecode'larını bellekte tutarak her çalıştırmada yeniden derlemeyi önler ve böylece performansı artırır. Bu projede:
- OPcache'ın etkin ve devre dışı olduğu durumlarda çalışma sürelerini ölçüyoruz.
- OPcache'ın küçük ve büyük işlemler üzerindeki etkisini gözlemliyoruz.

## 📂 Dosya Yapısı
- `opcache_test.php`: Performans testi için kullanılan ana PHP dosyası.
- `README.md`: Projenin detaylarını ve nasıl çalıştırılacağını açıklayan bu dosya.

## 🚀 Nasıl Çalıştırılır?

### 1. Projeyi Klonlayın
```bash
git clone https://github.com/username/PHP-Opcache-Performance-Test.git
cd PHP-Opcache-Performance-Test
```

### 2. OPcache Durumunu Kontrol Edin
`php.ini` dosyasındaki aşağıdaki ayarların doğru olduğundan emin olun:
```ini
opcache.enable=1
opcache.enable_cli=1
```

### 3. Performans Testini Çalıştırın
```bash
php opcache_test.php
```

### 4. Sonuçları Karşılaştırın
- OPcache'ı devre dışı bırakmak için `php.ini` dosyasındaki `opcache.enable` ayarını `0` yapın ve testi tekrar çalıştırın.
- Çalışma sürelerini karşılaştırarak OPcache'ın etkisini gözlemleyin.

## 🔍 Örnek Çıktı
```plaintext
Sonuç: 999998000000
Çalışma süresi: 0.0041868686676025 saniye
```

## 📝 Lisans
Bu proje [MIT Lisansı](LICENSE) ile lisanslanmıştır.
```

