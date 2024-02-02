import React, { useState } from 'react';

const FileUpload = () => {
    const [file, setFile] = useState<File | null>(null);

    const handleFileChange = (e: React.ChangeEvent<HTMLInputElement>) => {
        const selectedFile = e.target.files && e.target.files[0];
        if (selectedFile) {
            // Validate file type (Excel)
            if (selectedFile.type !== 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
                alert('Please upload only Excel files.');
                return;
            }
            setFile(selectedFile);
        }
    };

    const handleSubmit = async () => {
        if (file) {
            const formData = new FormData();
            formData.append('file', file);

            try {
                const response = await fetch('/upload', {
                    method: 'POST',
                    body: formData,
                });
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                const data = await response.json();
                console.log(data);
                alert('Attendance uploaded successfully.');
                // Optionally, you can update the UI here if needed
            } catch (error) {
                console.error('There was a problem with the fetch operation:', error);
            }
        } else {
            alert('Please select a file.');
        }
    };

    return (
        <div>
            <input type="file" onChange={handleFileChange} accept=".xlsx, .xls" />
            <button onClick={handleSubmit}>Upload Attendance</button>
        </div>
    );
};

export default FileUpload;
