#include <iostream>
#include <cstdlib>  // rand, srand
#include <ctime>    // time

using namespace std;

int main() {
    int n;

    cout << "n 값을 입력하세요 (10~100): ";
    cin >> n;

    if (n < 10 || n > 100) {
        cout << "범위를 벗어났습니다." << endl;
        return 0;
    }

    int arr[100];

    // 랜덤 시드 설정
    srand(time(0));

    // 랜덤 숫자 생성 (1~100)
    for (int i = 0; i < n; i++) {
        arr[i] = rand() % 100 + 1;
    }

    // 생성된 배열 출력
    cout << "\n생성된 배열:\n";
    for (int i = 0; i < n; i++) {
        cout << arr[i] << " ";
    }

    // 오름차순 정렬 (버블 정렬 - 초보자용)
    for (int i = 0; i < n - 1; i++) {
        for (int j = 0; j < n - 1 - i; j++) {
            if (arr[j] > arr[j + 1]) {
                int temp = arr[j];
                arr[j] = arr[j + 1];
                arr[j + 1] = temp;
            }
        }
    }

    // 정렬된 배열 출력
    cout << "\n\n정렬된 배열 (오름차순):\n";
    for (int i = 0; i < n; i++) {
        cout << arr[i] << " ";
    }

    cout << endl;

    return 0;
}