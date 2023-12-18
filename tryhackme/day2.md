# Day 2: Log analysis

- khởi động VM trên THM

![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/17a8e23e-f188-4967-bba3-e4000fc32462)

1.How many packets were captured (looking at the PacketNumber)?
- chạy packet trong code 

![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/74add41b-f3f2-4ca6-ac67-35f9fe47bb49)

- với bài này ta sử dụng câu lệnh df (dataframe) được sử dụng trong jupiter , kết hợp với count() để đếm packet traffic

```
 df.count()
```

![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/57681289-74ce-4d45-b2ed-0f3a80a04ab0)

![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/c9800361-e9d3-4b5d-b052-d2a0d52d6789)

2.What IP address sent the most amount of traffic during the packet capture?

![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/3af325df-34ee-46ff-8405-ee04cb60a4f0)

- ip add sent from source ==> most amount


```
 df.groupby(['Source']).size().sort_values(ascending=Flase)
```
= > 15 
- ouput

![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/e3957481-b10e-406b-bcf2-78b0129fa31d)


3. What was the most frequent protocol?

![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/c9c62270-0350-4bda-b280-212b38262764)

```
 df.groupby(['Protocol']).size()
```
= 27 

![image](https://github.com/j10nelop/ehc_challenge/assets/152776722/a8c9dcdf-e980-46d7-acf2-14c84c8423b5)
