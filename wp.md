# Lê Trung Tín - CTV BCM - EHC Challenges

Đây sẽ là toàn bộ writeup về challenge OverTheWire: Bandit của EHC giao trong kì thử thách đối với cộng tác viên ban chuyên môn của CLB

<img width="757" alt="image" src="https://github.com/j10nelop/ehc_challenge/assets/152776722/8b63b780-5c27-4c99-8251-4055380812ff">

bước 1: cài đặt và sử dụng ubuntu trên vmware workstation : 

# level 0 

<img width="1037" alt="image-2" src="https://github.com/j10nelop/ehc_challenge/assets/152776722/9f4ee81e-8def-45c8-a044-a5e39597e2f5">

- kết nối ssh:
```python
 ssh bandit0@bandit.labs.overthewire.org -p 2220
```

![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/19123f2f-cdaa-45f1-aea1-247cc77c5761)

- với level 0 chúng ta sẽ sử dụng lệnh ls (để list các tệp tin) sau đó sẽ xuất hiện 1 file tên là Readme 
và mở lên sử dụng lệnh cat (để xem thông tin trong file )

```python
ls
cat readme
```

![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/ae1eda8f-dbc1-43d4-95b7-3ed7ff5ac6e3)

*Flag0: NH2SXQwcBdpmTEzi3bvBHMM9H66vVXjL*

# level 1 

![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/aba7ae29-2089-4dbe-ac41-923acb23605f)


-tương tự kêt nối ssh đến user:bandit1 và password: flag0, đầu tiên ta cần sử dụng lệnh ls -l 
```python
ls -l 
```
liệt kê kiểu file thuộc dir or f rồi sử dụng cat để check thông tin bên trong 
```python
cat ./- 
```
![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/2e23e838-59e8-43b2-8700-db0400932f17)


*Flag1:rRGizSaX8Mk1RTb1CNQoXTcYZWU6lgzi*

# level 2
![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/4b7b35d5-2a26-4a92-ab34-e3c5e49dbb89)

- với level 2 ta kết nối ssh và sử dụng ls -l và check được file spaces in this filename tượng tự với level trên thì ta sử dụng

```python
ls -l 
```
- liệt kê và check file

```python
cat + ( nhấn nút tab ) 
```
- để xem thông tin bên trong thư mục , tab sử dụng để tự động hoàn thành 1 câu hoàn chỉnh

![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/86205dca-9bd4-4571-8a49-fd31d12cd268)
*Flag2:aBZ0W5EmUfAf7kHTQeOwd8bauFJ2lAiG*

# level 3: 
<img width="411" alt="image-8" src="https://github.com/j10nelop/ehc_challenge/assets/152776722/302633f7-cd7a-4305-acad-53f5e1edecea">

-  sử dụng lệnh ls  để xem nội dung của thư mục hiện tại và xác định được thư mục inhere/
-  sử dụng lệnh ls -la inhere/ để xem toàn bộ file thư mục bên trong bao gồm .hidden file

```python
ls -la inhere
```
- sử dụng cat để xem nội dung bên trong
  
![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/b5f5d280-a499-493b-8c91-1f30315641ce)

*flag3:2EW7BBsr6aMMoJ2HjW067dm8EgX26xNe*
  
# level 4:

<img width="796" alt="image-10" src="https://github.com/j10nelop/ehc_challenge/assets/152776722/a96f3b0e-5191-44f1-9bc7-e53a416008e5">

- để tìm tệp có định dạng xác định có thể đọc được cho con người ta sử dụng lệnh file để check nội dung định dạng của các tệp
- sau khi tìm được định dạng file ta sử dụng cat để check thông tin

![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/1692d97a-2483-4f3c-a86c-a6233925875e)
- vậy là ta tìm được 1 tệp ascii text  
*flag4:lrIWWI6bB37kxfiCQZqUdOIYfr6eEeqR*

# level 5:

<img width="647" alt="image-13" src="https://github.com/j10nelop/ehc_challenge/assets/152776722/7b534f07-3f74-45a4-821d-a60599372b40">

- trong thư mục inhere có chứa nhiều thư mục chứa file password để tìm file thì dựa trên hint là size và kiểu  type f 
- ta có lệnh find để tìm file cần biết (type f file ) và ( -size 1033c) combine lại ta có 

![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/20715d3c-3f9e-4315-b6e4-ef78817ba5fb)

*flag5:P4L4vucdmLnm8I7Vl7jG1ApGSfjYKqJU*

# level 6:

<img width="539" alt="image-15" src="https://github.com/j10nelop/ehc_challenge/assets/152776722/cc209a28-615b-4d52-86d7-860c99c18d6c">

cd











  

















