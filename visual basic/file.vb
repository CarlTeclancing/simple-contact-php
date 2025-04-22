' Add Button
Private Sub btnAdd_Click(sender As Object, e As EventArgs) Handles btnAdd.Click
    Dim num1 As Double = Val(txtNum1.Text)
    Dim num2 As Double = Val(txtNum2.Text)
    lblResult.Text = "Result: " & (num1 + num2)
End Sub

' Subtract Button
Private Sub btnSubtract_Click(sender As Object, e As EventArgs) Handles btnSubtract.Click
    Dim num1 As Double = Val(txtNum1.Text)
    Dim num2 As Double = Val(txtNum2.Text)
    lblResult.Text = "Result: " & (num1 - num2)
End Sub

' Multiply Button
Private Sub btnMultiply_Click(sender As Object, e As EventArgs) Handles btnMultiply.Click
    Dim num1 As Double = Val(txtNum1.Text)
    Dim num2 As Double = Val(txtNum2.Text)
    lblResult.Text = "Result: " & (num1 * num2)
End Sub

' Divide Button
Private Sub btnDivide_Click(sender As Object, e As EventArgs) Handles btnDivide.Click
    Dim num1 As Double = Val(txtNum1.Text)
    Dim num2 As Double = Val(txtNum2.Text)
    If num2 <> 0 Then
        lblResult.Text = "Result: " & (num1 / num2)
    Else
        lblResult.Text = "Error: Cannot divide by zero"
    End If
End Sub
